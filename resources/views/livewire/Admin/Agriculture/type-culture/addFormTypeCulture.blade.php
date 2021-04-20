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
