<div class="col-md-4 col-12">
    @if (session()->has('ajout_success'))
    <span style="display: inline" class="alert alert-success">
        {{ session('ajout_success') }}
    </span>
@elseif (session()->has('message'))
    <span class="ml-2 alert alert-danger">
        {{ session('message') }}
    </span>
    @elseif (session()->has('modify_success'))
    <span class="ml-2 alert alert-success">
        {{ session('message') }}
    </span>
@endif
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Ajouter culture</h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Nom culture</label>
                            <input type="text" id="first-name-vertical" class="form-control @error('nom_culture') is-invalid @enderror" wire:model='nom_culture' placeholder="Nom culture" />
                            @error('nom_culture') <p class="ml-1 text-danger error">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Description</label>
                            <textarea type="text" id="first-name-vertical" class="form-control @error('description') is-invalid @enderror" wire:model='description' placeholder="Description"></textarea>
                            @error('description') <p class="ml-1 text-danger error">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="contact-info-vertical">image culture</label>
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

