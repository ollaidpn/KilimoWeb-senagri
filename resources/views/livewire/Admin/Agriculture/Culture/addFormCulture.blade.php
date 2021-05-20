<div class="col-md-4 col-12">
    <div class="card-content">
        @if (session()->has('modify_success'))
        <div class="p-2 alert alert-success alert-dismissible fade show" role="alert">
            {{ session('modify_success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif (session()->has('ajout_success'))
            <div class="p-2 alert alert-success alert-dismissible fade show" role="alert">
                {{ session('ajout_success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @elseif (session()->has('message'))
            <div class="p-2 alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Ajouter spéculation</h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Nom Spéculation</label>
                            <input type="text" id="first-name-vertical" class="form-control @error('nom_culture') is-invalid @enderror" wire:model='nom_culture' placeholder="Ex: oignon" />
                            @error('nom_culture') <p class="ml-1 text-danger error">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Type culture</label>
                            <input type="text" id="first-name-vertical" class="form-control @error('nom_culture') is-invalid @enderror" wire:model='nom_culture' placeholder="Nom culture" />
                            @error('nom_culture') <p class="ml-1 text-danger error">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Fertilisation</label>
                            <input type="text" id="first-name-vertical" class="form-control @error('nom_culture') is-invalid @enderror" wire:model='nom_culture' placeholder="fertilisation" />
                            @error('nom_culture') <p class="ml-1 text-danger error">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Irrigation</label>
                            <input type="text" id="first-name-vertical" class="form-control @error('nom_culture') is-invalid @enderror" wire:model='nom_culture' placeholder="irrigation" />
                            @error('nom_culture') <p class="ml-1 text-danger error">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Traitement(s)</label>
                            <textarea type="text" id="first-name-vertical" class="form-control @error('description') is-invalid @enderror" wire:model='description' placeholder="traitement"></textarea>
                            @error('description') <p class="ml-1 text-danger error">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="contact-info-vertical">image spéculation</label>
                            <input type="file" id="contact-info-vertical" class="form-control @error('image') is-invalid @enderror" wire:model='image' name="contact" placeholder="Mobile" />
                            @error('image') <p class="ml-1 text-danger error">{{ $message }}</p> @enderror
                        </div>
                        @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" width="150" height="150">
                            @endif
                        </div>

                    <div class="col-12">
                        <button wire:click.prevent='store()' class="mr-1 btn btn-primary">Ajouter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

