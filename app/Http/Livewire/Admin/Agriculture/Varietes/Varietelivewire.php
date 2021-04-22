<?php

namespace App\Http\Livewire\Admin\Agriculture\Varietes;

use App\Models\Culture;
use App\Models\CulturesVariete;
use Livewire\Component;

class Varietelivewire extends Component
{

    public $updateMode;
    public $id_variete, $nom_variete, $culture_id, $temps_de_recolte, $repiquage_planche, $repiquage_alveole, $temps_arrosage;

    public function render()
    {
        $varietes = CulturesVariete::
                    join('cultures', 'cultures.id', '=', 'cultures_varietes.culture_id')
                    ->get(['cultures_varietes.*', 'nom_culture']);

        $cultures = Culture::pluck('nom_culture', 'id');
        $selectedID = 1;
        $updateMode = false;

        return view('livewire.admin.agriculture.varietes.varietelivewire', compact('varietes', 'selectedID', 'cultures', 'updateMode'));
    }

    protected $messages = [
        'nom_variete.required' => 'Veuillez saisir un nom de variété valide',
        'culture_id.required' => 'Veuillez choisir un type de culture',
        'temps_de_recolte.required' => 'Veuillez indiquer le temps de récolte de la variéré',
        'repiquage_planche.required' => 'Merci d\'indiquer la durée de vie avec une repiquage planche',
        'repiquage_alveole.required' => 'Merci d\'indiquer la durée de vie avec une repiquage alvéole',
        'temps_arrosage.required' => 'Veuillez indiquer la durée d\'arrosage',
    ];

    private function resetInput()
    {
        $this->nom_variete = null;
        $this->culture_id = null;
        $this->temps_de_recolte = null;
        $this->repiquage_planche = null;
        $this->repiquage_alveole = null;
        $this->temps_arrosage = null;
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
            'culture_id' => 'required',
            'repiquage_planche' => 'required',
            'repiquage_alveole' => 'required',
            'temps_arrosage' => 'required',
        ]);

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
        $this->culture_id = $variete->culture_id;
        $this->repiquage_planche = $variete->repiquage_planche;
        $this->repiquage_alveole = $variete->repiquage_alveole;
        $this->temps_arrosage = $variete->temps_arrosage;
        $this->updateMode = true;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'nom_variete' => 'required',
            'temps_de_recolte' => 'required',
            'culture_id' => 'required',
            'repiquage_planche' => 'required',
            'repiquage_alveole' => 'required',
            'temps_arrosage' => 'required',
        ]);


        $id = CulturesVariete::find($this->id_variete);

        $id->update($validatedData);
        session()->flash('message', 'Semie modifier avec succès !');
        $this->resetInput();
    }
}

