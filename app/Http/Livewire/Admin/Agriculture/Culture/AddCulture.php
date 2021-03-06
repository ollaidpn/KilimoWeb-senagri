<?php

namespace App\Http\Livewire\Admin\Agriculture\Culture;
use App\Models\User;
use App\Models\Culture;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Livewire\Component;
use Illuminate\Http\Request;
class AddCulture extends Component
{
    public function render()
    {
        $cultureType =
        $user = User::find(Auth::user()->id);
        $cultures = Culture::All();
        return view('livewire.Admin.Agriculture.Culture.add-culture',compact('user','cultures'));
    }
    use WithFileUploads;
    public $nom_culture,$description,$image,$culture_id;
    public $updateMode = false;

    public function addCulture()
    {
        $user = User::find(Auth::user()->id);
        $cultures = Culture::All();
        return view('livewire.Admin.Agriculture.Culture.addCulture', compact('user','cultures'));
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
    public function store(Request $request)
    {
        $validaeDate = $this->validate([
            'nom_culture'=>'required',
            'description'=>'required', // tu les a call ou
            'image'=>'required'
        ]);
        $imageSelect = $this->image;

        if ($request->hasFile('image')) {

            $file_name = time().'.'.$request->image->getClientOriginalExtension();
            $path_name = 'storage/uploads/produits/'.'1'. date('Y')."/". date('F'). '/';

            if ($request->image->move($path_name, $file_name)) {
                $imageSelect->image = $path_name.$file_name;
            }

        }
        // $imageSelect = $this->image;
        // if($imageSelect)
        // {
        //     $this->validate([
        //         'image'=>'mimes:png,jpg,jpeg,bmp',
        //     ]);
        //     $extension = $imageSelect->extension();
        //     $imageName = time().'_culture.'.$extension;
        //     $imageSelect->storePubliclyAs('image/culture',$imageName);
        //     $validaeDate += [
        //         'image'=>$imageName,
        //     ];

        // }
        Culture::create($validaeDate);
        session()->flash('ajout_success', 'Vous avez ajout?? un nouveau category avec succ??s.');
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
            session()->flash('modify_success', 'Modification avec succ??s.');
            $this->updateMode = false;
            $this->resetInput();
        }
    }
    public function destroy($id)
    {
        if($id)
        {
            Culture::where('id',$id)->delete();
            session()->flash('message', 'Suppressions avec succ??s.');
        }
    }
}
