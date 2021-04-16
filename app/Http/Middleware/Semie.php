<?php

namespace App\Http\Livewire;

use App\Models\Culture;
use App\Models\CultureSemie;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Livewire\Component;

class Semie extends Component
{
    use WithFileUploads;

    public $updateMode;
    public $nom_semie, $culture_id, $description, $image, $semie, $id_semie;

    public function render()
    {

        $user = User::find(Auth::user()->id);
        /* $semies = CultureSemie::
                    join('cultures', 'cultures.id', '=', 'culture_semies.culture_id')
                    ->get(['culture_semies.*', 'nom']);

        $cultures = Culture::pluck('nom', 'id');
        $selectedID = 1;
        $updateMode = false; */

        return view('livewire.Admin.Agriculture.Culture.Semies.semie', compact('user'));
    }

    // Add new semie

    /* protected $messages = [
        'nom_semie.required' => 'Veuillez saisir un nom de semie valide',
        'culture_id.required' => 'Veuillez choisir un type de culture',
        'description.required' => 'Veuillez renseigner une description',
    ];

    private function resetInput()
    {
        $this->nom_semie = null;
        $this->culture_id = null;
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
            'culture_id' => 'required',
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
            $record = CultureSemie::find($id);
            //dd($id);
            $record->delete();
            session()->flash('message', 'Vous venez de supprimer une semie avec succès !');
        }
    }


    public function edit($id)
    {
        $semie = CultureSemie::find($id);

        $this->id_semie = $semie->id;
        $this->nom_semie = $semie->nom_semie;
        $this->description = $semie->description;
        $this->culture_id = $semie->culture_id;
        $this->image = $semie->image;
        $this->semie = $semie;
        $this->updateMode = true;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'nom_semie' => 'required',
            'description' => 'required',
            'culture_id' => 'required',
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
    } */
}
