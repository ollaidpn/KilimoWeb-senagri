<div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Modification de climat</h4>
        </div>
        <div class="card-body">

                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nom">Nom climat</label>
                            <input class="form-control @error('id_climat') is-invalid @enderror" type="hidden" wire:model="id_climat" placeholder="" />
                            <input type="text" id="nom"
                                class="form-control" wire:model="nom_climat" placeholder="" />
                                @error('nom_climat') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <button wire:click="update()" class="mr-1 btn btn-primary">Modifier</button>
                        <button wire:click="annule()" class="mr-1 btn btn-warning">Annuler</button>
                    </div>
                </div>

        </div>
    </div>
</div>
