<div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Ajouter un climat</h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical" wire:submit.prevent="addSemie" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nom">Nom du climat</label>
                            <input type="text" id="nom" class="form-control  @error('nom_climat') is-invalid @enderror" wire:model="nom_climat" placeholder="Ex: chaud" />
                            @error('nom_climat') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="mr-1 btn btn-primary">Ajouter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
