<?php

namespace App\Http\Livewire\Admin\Agriculture\Culture;

use App\Models\Climat;
use App\Models\User;
use App\Models\Culture;
use App\Models\CulturesType;
use App\Models\Sols;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Livewire\Component;
use Illuminate\Http\Request;
class AddCulture extends Component
{
    use WithFileUploads;
    public  $nom_speculation,
            $fertilisation,
            $irrigation_phase_croissance,
            $irrigation_phase_maturite,
            $image,
            $imageView,
            $typeculture_id,
            $type_sol_id,
            $climat_id,
            $culture_id,
            $updateMode = false;

    public function render()
    {
        //$cultureType =
        $user = User::find(Auth::user()->id);
        $cultures = Culture::
                    join('cultures_types', 'cultures_types.id', '=', 'cultures.typeculture_id')->
                    join('climats', 'climats.id', '=', 'cultures.climat_id')->
                    join('sols', 'sols.id', '=', 'cultures.type_sol_id')
                    ->get(['cultures.*', 'nom_typeculture','nom_climat','type_de_sol']);

        $typeCultures = CulturesType::pluck('nom_typeculture', 'id');
        $climats = Climat::pluck('nom_climat', 'id');
        $sols = Sols::pluck('type_de_sol', 'id');
        $selectedID = 1;

        return view('livewire.Admin.Agriculture.Culture.add-culture',compact('user','cultures', 'climats', 'sols', 'selectedID', 'typeCultures'));
    }


    public function addCulture()
    {
        $user = User::find(Auth::user()->id);
        $cultures = Culture::All();
        return view('livewire.Admin.Agriculture.Culture.addCulture', compact('user','cultures'));
    }

    public function resetInput()
    {
        $this->culture_id='';
        $this->nom_speculation='';
        $this->fertilisation='';
        $this->irrigation_phase_croissance='';
        $this->irrigation_phase_maturite='';
        $this->image='';
        $this->imageView='';
        $this->type_sol_id='';
        $this->typeculture_id='';
        $this->climat_id='';
    }
    // pour personnaliser les message d'erreur
    protected $messages = [
        'nom_speculation.required'=>'Le nom de la spéculation est obligatoire.',
        'fertilisation.required'=>'Merci de renseigner les fertilisants pour cette spéculation.',
        'irrigation_phase_croissance.required'=>'Définissez la quantité d\'eau à irriguer lors de la phase de croissance.',
        'irrigation_phase_maturite.required'=>'Définissez la quantité d\'eau à irriguer lors de la phase de maturation.',
        'image.required'=>'Oups l\'image du spéculation est fondamentale.',
        'type_sol_id.required'=>'Merci de determiner le type sol supporter.',
        'climat_id.required'=>'Merci de définir la période de culture.',
        'typeculture_id.required'=>'Définissez le type de culture auquel fait partie cette spéculation.',
    ];

    public function store(Request $request)
    {
        $validateData = $this->validate([
            'nom_speculation'=>'required',
            'fertilisation'=>'required',
            'image'=>'required',
            'irrigation_phase_croissance'=>'',
            'irrigation_phase_maturite'=>'',
            'type_sol_id'=>'required',
            'typeculture_id'=>'required',
            'climat_id'=>'required'
        ]);

        $imageSelect = $this->image;

        if ($request->hasFile('image')) {

            $file_name = time().'.'.$request->image->getClientOriginalExtension();
            //$extension = $request->image->extension();
            $path_name = 'storage/culture/';

            if ($request->image->move($path_name, $file_name)) {
                $imageSelect->image = $path_name.$file_name;
            }

        }

        Culture::create($validateData);
        session()->flash('ajout_success', 'Vous avez ajouté une nouvelle spéculation avec succès.');
        $this->resetInput();
    }

    public function edit($id)
    {
        $this->updateMode = true;

        $culture = Culture::where('id',$id)->first();
        $this->culture_id=$culture->id;
        $this->nom_speculation = $culture->nom_speculation;
        $this->fertilisation = $culture->fertilisation;
        $this->irrigation_phase_croissance = $culture->irrigation_phase_croissance;
        $this->irrigation_phase_maturite = $culture->irrigation_phase_maturite;
        $this->imageView = $culture->image;
        $this->type_sol_id = $culture->type_sol_id;
        $this->typeculture_id = $culture->typeculture_id;
        $this->climat_id = $culture->climat_id;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInput();
    }

    public function update()
    {
        /* $validateDate = $this->validate([
            'nom_culture'=>'required',
            'description'=>'required',
            'image'=>'required'
        ]); */
        if($this->culture_id)
        {
            $culture = Culture::find($this->culture_id);

            $imageSelect = $this->image;

            if($imageSelect){
                $imageName = $this->image;
            }else{
                $imageName = $this->imageView;
            }

            $culture->update([

                'nom_speculation' => $this->nom_speculation,
                'fertilisation' => $this->fertilisation,
                'irrigation_phase_croissance' => $this->irrigation_phase_croissance,
                'irrigation_phase_maturite' => $this->irrigation_phase_maturite,
                'image' => $imageName,
                'type_sol_id' => $this->type_sol_id,
                'typeculture_id' => $this->typeculture_id,
                'climat_id' => $this->climat_id,
            ]);

            session()->flash('modify_success', 'Spéculation modifier avec succès.');
            $this->updateMode = false;
            $this->resetInput();
        }
    }

    public function destroy($id)
    {
        if($id)
        {
            Culture::where('id',$id)->delete();
            session()->flash('message', 'Suppression reussie.');
        }
    }
}
