<?php

namespace App\Http\Livewire\Admin\Agriculture\Varietes;

use App\Models\Climat;
use App\Models\Culture;
use App\Models\CultureSemie;
use App\Models\CulturesVariete;
use Livewire\Component;

class Varietelivewire extends Component
{

    public  $updateMode;
    public  $id_variete,
            $nom_variete,
            $speculation_id,
            $temps_de_recolte,
            $repiquage_planche,
            $repiquage_alveole,
            $rendement,
            $climat_id,
            $type_semie_id,
            $resistance_maladie,
            $resistance_ravageur;

    public function render()
    {
        $varietes = CulturesVariete::
                    join('cultures', 'cultures.id', '=', 'cultures_varietes.speculation_id')->
                    join('climats', 'climats.id', '=', 'cultures_varietes.climat_id')->
                    join('culture_semies', 'culture_semies.id', '=', 'cultures_varietes.type_semie_id')
                    ->get(['cultures_varietes.*', 'nom_speculation', 'nom_climat','nom_semie']);

        $cultures = Culture::pluck('nom_speculation', 'id');
        $climats = Climat::pluck('nom_climat', 'id');
        $semies = CultureSemie::pluck('nom_semie', 'id');
        $selectedID = 1;
        $updateMode = false;

        return view('livewire.Admin.Agriculture.varietes.varietelivewire', compact('varietes', 'selectedID', 'cultures', 'updateMode','climats', 'semies'));
    }

    protected $messages = [
        'nom_variete.required' => 'Veuillez saisir un nom de variété valide',
        'speculation_id.required' => 'Veuillez choisir un type de culture',
        'temps_de_recolte.required' => 'Veuillez indiquer le temps de récolte de la variété',
        'repiquage_planche.required' => 'Merci d\'indiquer la durée de vie avec une repiquage planche',
        'repiquage_alveole.required' => 'Merci d\'indiquer la durée de vie avec une repiquage alvéole',
        'rendement.required' => 'Veuillez indiquez le rendement attendu',
        'resistance_maladie.required' => 'Veuillez indiquer les maladies auquelles il est résistant',
        'resistance_ravageur.required' => 'Veuillez indiquer les ravageurs auquels il un peut resister',
        'climat_id.required' => 'Veuillez choisir le climat adéquat pour la culture de cette varité',
        'type_semie_id.required' => 'Veuillez choisir le type de semie pour la pépinière',
    ];

    private function resetInput()
    {
        $this->id_variete = null;
        $this->nom_variete = null;
        $this->speculation_id = null;
        $this->temps_de_recolte = null;
        $this->repiquage_planche = null;
        $this->repiquage_alveole = null;
        $this->resistance_maladie = null;
        $this->resistance_ravageur = null;
        $this->rendement = null;
        $this->climat_id = null;
        $this->type_semie_id = null;
    }

    public function annule(){
        $this->resetInput();
        $this->updateMode = false;
    }

    public function addVariete()
    {
        $validatedData = $this->validate([
            'nom_variete' => 'required',
            'temps_de_recolte' => 'required',
            'speculation_id' => 'required',
            'repiquage_planche' => 'required',
            'repiquage_alveole' => 'required',
            'rendement' => 'required',
            'resistance_maladie' => 'required',
            'resistance_ravageur' => 'required',
            'climat_id' => 'required',
            'type_semie_id' => 'required',
        ]);
            //dd($validatedData);
        CulturesVariete::create($validatedData);

        session()->flash('message', 'Variété ajouter avec succès !');
        $this->resetInput();
    }

    public function destroy($id)
    {
        if ($id) {
            $record = CulturesVariete::find($id);
            //dd($id);
            $record->delete();
            session()->flash('message', 'Vous venez de supprimer une variété avec succès !');
            $this->resetInput();
        }
    }


    public function edit($id)
    {
        $variete = CulturesVariete::find($id);

        $this->id_variete = $variete->id;
        $this->nom_variete = $variete->nom_variete;
        $this->temps_de_recolte = $variete->temps_de_recolte;
        $this->speculation_id = $variete->speculation_id;
        $this->rendement = $variete->rendement;
        $this->repiquage_planche = $variete->repiquage_planche;
        $this->repiquage_alveole = $variete->repiquage_alveole;
        $this->resistance_maladie = $variete->resistance_maladie;
        $this->resistance_ravageur = $variete->resistance_ravageur;
        $this->climat_id = $variete->climat_id;
        $this->type_semie_id = $variete->type_semie_id;
        $this->updateMode = true;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'nom_variete' => 'required',
            'temps_de_recolte' => 'required',
            'speculation_id' => 'required',
            'repiquage_planche' => 'required',
            'rendement' => 'required',
            'repiquage_alveole' => 'required',
            'resistance_maladie' => 'required',
            'resistance_ravageur' => 'required',
            'climat_id' => 'required',
            'type_semie_id' => 'required',
        ]);


        $id = CulturesVariete::find($this->id_variete);

        $id->update($validatedData);
        session()->flash('message', 'Variété modifier avec succès !');
        $this->resetInput();
    }
}

