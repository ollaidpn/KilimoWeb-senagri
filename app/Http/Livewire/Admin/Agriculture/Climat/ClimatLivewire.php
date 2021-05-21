<?php

namespace App\Http\Livewire\Admin\Agriculture\Climat;

use App\Models\Climat;
use Livewire\Component;

class ClimatLivewire extends Component
{
    public $updateMode;
    public $nom_climat, $id_climat;

    public function render()
    {
        $climats = Climat::All();
        return view('livewire.admin.agriculture.climat.climat-livewire', compact('climats'));
    }

    protected $messages = [
        'nom_climat.required' => 'Veuillez saisir le nom du climat',
    ];

    private function resetInput()
    {
        $this->nom_climat = null;
    }

    public function annule(){
        $this->resetInput();
        $this->updateMode = false;
    }

    public function addSemie()
    {
        $validatedData = $this->validate([
            'nom_climat' => 'required',
        ]);


        Climat::create($validatedData);

        session()->flash('message', 'Climat ajouter avec succès !');
        $this->resetInput();
    }

    public function destroy($id)
    {
        if ($id) {
            $semie = Climat::find($id);
            //dd($id);
            $semie->delete();
            session()->flash('message', 'Vous venez de supprimer un climat avec succès !');
            $this->resetInput();
        }
    }


    public function edit($id)
    {
        $climat = Climat::find($id);

        $this->id_climat = $climat->id;
        $this->nom_climat = $climat->nom_climat;
        $this->updateMode = true;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'nom_climat' => 'required',
        ]);

        $id = Climat::find($this->id_climat);


        $id->update($validatedData);
        session()->flash('message', 'Climat modifier avec succès !');
        $this->resetInput();
    }
}
