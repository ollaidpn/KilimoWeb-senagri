<div class="col-md-4 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Ajouter un type de culture</h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Nom type de culture</label>
                            <input type="text" id="first-name-vertical" class="form-control @error('nom_typeculture') is-invalid @enderror" wire:model='nom_typeculture' name="fname" placeholder="Nom type de culture" />
                        </div>
                    </div>
                    @error('nom_typeculture') <p class="ml-1 text-danger error">{{ $message }}</p> @enderror
                    <div class="col-12">
                        <button wire:click.prevent='store()' class="mr-1 btn btn-primary">Ajouter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
