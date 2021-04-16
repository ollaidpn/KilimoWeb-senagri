<?php

namespace App\Http\Livewire;
use App\Models\User;
use App\Models\CulturesType;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TypeCulture extends Component
{
    public $nom_typeculture,$typeculture_id;
    public $updateMode = false;
    public function index()
    {
        $user = User::find(Auth::user()->id);
        return view('livewire.Admin.Agriculture.typeCulture.typeCulture', compact('user'));

    }
    public function render()
    {
        $culture_types = CulturesType::All();
        return view('livewire.type-culture',compact('culture_types'));
    }
    public function resetInput()
    {
        $this->nom_typeculture = '';
    }
    public function store()
    {
        $validaeDate = $this->validate([
            'nom_typeculture'=>'required',
        ]);

        CulturesType::create($validaeDate);
        session()->flash('ajout_success', 'Vous avez ajouté un nouveau type de culture avec succès.');
        $this->resetInput();
    }
    public function edit($id)
    {
        $this->updateMode = true;
        $cultureType = CulturesType::where('id',$id)->first();
        $this->typeculture_id = $id;
        $this->nom_typeculture = $cultureType->nom_typeculture;
    }
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInput();
    }
    public function update()
    {
        $validaeDate = $this->validate([
            'nom_typeculture'=>'required',
        ]);
        if($this->typeculture_id)
        {
            $cultureType = CulturesType::find($this->typeculture_id);
            $cultureType->update([
                'nom_typeculture'=>$this->nom_typeculture,
            ]);
            $this->updateMode = false;
            $this->resetInput();
        }
    }
    public function destroy($id)
    {
        if($id)
        {
            CulturesType::where('id',$id)->delete();
            session()->flash('message','Suppressionn reussie');
        }
    }
}
