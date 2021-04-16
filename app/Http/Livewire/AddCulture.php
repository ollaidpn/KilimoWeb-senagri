<?php

namespace App\Http\Livewire;
use App\Models\User;
use App\Models\Culture;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Livewire\Component;
class AddCulture extends Component
{
    use WithFileUploads;
    public $nom_culture,$description,$image,$culture_id;
    public $updateMode = false;

    public function addCulture()
    {
        $user = User::find(Auth::user()->id);
        $cultures = Culture::All();
        return view('livewire.Admin.Agriculture.Culture.addCulture', compact('user','cultures'));
    }
    public function render()
    {
        $user = User::find(Auth::user()->id);
        $cultures = Culture::All();
        return view('livewire.add-culture',compact('user','cultures'));
    }
    public function resetInput()
    {
        $this->nom_culture='';
        $this->description='';
        $this->image='';
    }
    // pour personnaliser les message d'erreur
    protected $messages = [
        'nom_culture.required'=>'Le champ nom culture est obligatoire.',
        'description.required'=>'Le champ description est obligatoire.',
        'image'=>'Le champ image est obligatoire.'
    ];
    public function store()
    {
        $validaeDate = $this->validate([
            'nom_culture'=>'required',
            'description'=>'required',
            'image'=>'required'
        ]);
        $imageSelect = $this->image;
        if($imageSelect)
        {
            $this->validate([
                'image'=>'mimes:png,jpg,jpeg,bmp',
            ]);
            $extension = $imageSelect->extension();
            $imageName = time().'_culture.'.$extension;
            $imageSelect->storePubliclyAs('image/culture',$imageName);
            $validaeDate += [
                'image'=>$imageName,
            ];

        }
        Culture::create($validaeDate);
        session()->flash('ajout_success', 'Vous avez ajouté un nouveau category avec succès.');
        $this->resetInput();
    }
    public function edit($id)
    {
        $this->updateMode = true;
        $culture = Culture::where('id',$id)->first();
        $this->culture_id = $id;
        $this->nom_culture = $culture->nom_culture;
        $this->description = $culture->description;
        $this->image = $culture->image;
    }
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInput();
    }
    public function update()
    {
        $validaeDate = $this->validate([
            'nom_culture'=>'required',
            'description'=>'required',
            'image'=>'required'
        ]);
        if($this->culture_id)
        {
            $culture = Culture::find($this->culture_id);
            $culture->update([
                'nom_culture'=>$this->nom_culture,
                'description'=>$this->description,
                'image'=>$this->image
            ]);
            session()->flash('modify_success', 'Modification avec succès.');
            $this->updateMode = false;
            $this->resetInput();
        }
    }
    public function destroy($id)
    {
        if($id)
        {
            Culture::where('id',$id)->delete();
            session()->flash('message', 'Suppressions avec succès.');
        }
    }
}
