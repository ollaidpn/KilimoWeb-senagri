<div class="col-md-4 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Modifier un type de culture</h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Nom</label>
                            <input type="text" id="first-name-vertical" class="form-control @error('nom_typeculture') is-invalid @enderror" wire:model='nom_typeculture' placeholder="nom type de culture" />
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="mr-1 btn btn-primary" wire:click.prevent='update()'>Validez</button>
                        <button class="mr-1 btn btn-warning" wire:click.prevent='cancel()'>Annulez</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
