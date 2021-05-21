<?php

namespace App\Http\Livewire\Admin\Agriculture\Semies;

use App\Models\Culture;
use App\Models\CultureSemie;
use App\Models\CulturesType;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Semielivewire extends Component

{
    use WithFileUploads;

    public $updateMode;
    public $nom_semie, $type_culture_id, $description, $image, $imageView,$semie, $id_semie;

    public function render()
    {

        $user = User::find(Auth::user()->id);
        $semies = CultureSemie::
                    join('cultures_types', 'cultures_types.id', '=', 'culture_semies.type_culture_id')
                    ->get(['culture_semies.*', 'nom_typeculture']);

        $cultures = CulturesType::pluck('nom_typeculture', 'id');
        $selectedID = 1;

        return view('livewire.Admin.Agriculture.Semies.semielivewire', compact('semies', 'cultures', 'selectedID'));
    }

    // Add new semie

    protected $messages = [
        'nom_semie.required' => 'Veuillez saisir un nom de semie',
        'type_culture_id.required' => 'Veuillez choisir un type de culture',
        'description.required' => 'Veuillez renseigner une description',
    ];

    private function resetInput()
    {
        $this->nom_semie = null;
        $this->type_culture_id = null;
        $this->description = null;
        $this->image = null;
    }

    public function annule(){
        $this->resetInput();
        $this->updateMode = false;
    }

    public function addSemie()
    {
        $validatedData = $this->validate([
            'nom_semie' => 'required',
            'description' => 'required',
            'type_culture_id' => 'required',
        ]);

        $imageSelect = $this->image;

        if($imageSelect){
            $this->validate([
                'image' => 'mimes:jpeg,jpg,bmp,png',
            ]);

            $extension = $imageSelect->extension();
            $imageName = time().'_semie.'.$extension;
            $imageSelect->storeAs('image/semie', $imageName);

            $validatedData += [
                "image"=> $imageName,
                ];

            //$updateMode = true;
        }

        CultureSemie::create($validatedData);

        session()->flash('message', 'Semie ajouter avec succès !');
        $this->resetInput();
    }

    public function destroy($id)
    {
        if ($id) {
            $semie = CultureSemie::find($id);
            //dd($id);
            $semie->delete();
            session()->flash('message', 'Vous venez de supprimer une semie avec succès !');
            $this->resetInput();
        }
    }


    public function edit($id)
    {
        $semie = CultureSemie::find($id);

        $this->id_semie = $semie->id;
        $this->nom_semie = $semie->nom_semie;
        $this->description = $semie->description;
        $this->type_culture_id = $semie->type_culture_id;
        $this->imageView = $semie->image;
        $this->semie = $semie;
        $this->updateMode = true;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'nom_semie' => 'required',
            'description' => 'required',
            'type_culture_id' => 'required',
        ]);

        $imageSelect = $this->image;

        if($imageSelect){
            $this->validate([
                'image' => 'mimes:jpeg,jpg,bmp,png',
            ]);

            $extension = $imageSelect->extension();
            $imageName = time().'_semie.'.$extension;
            $imageSelect->storeAs('image/semie', $imageName);

            $validatedData += [
                "image"=> $imageName,
                ];

            //$updateMode = true;
        }
        $id = CultureSemie::find($this->id_semie);
        //dd($validatedData);
        $id->update($validatedData);
        session()->flash('message', 'Semie modifier avec succès !');
        $this->resetInput();
    }
}
