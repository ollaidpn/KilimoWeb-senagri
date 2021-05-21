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
                            <input type="text" id="first-name-vertical" class="form-control @error('nom_speculation') is-invalid @enderror" wire:model='nom_speculation' placeholder="Ex: oignon" />
                            @error('nom_speculation') <p class="text-danger error">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="contact-info-vertical">Type de culture</label>
                            <select wire:model="typeculture_id" class="form-control  @error('typeculture_id') is-invalid @enderror">
                                <option>Choisir le type de culture</option>
                                @foreach ($typeCultures as $key => $value)
                                    <option value="{{ $key }}"
                                        {{ $key == $selectedID ? 'selected' : '' }}>
                                        {{ $value }}
                                    </option>
                                @endforeach
                            </select>
                            @error('typeculture_id') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="contact-info-vertical">Type de sol</label>
                            <select wire:model="type_sol_id" class="form-control  @error('type_sol_id') is-invalid @enderror">
                                <option>Choisir le type de sol adéquat</option>
                                @foreach ($sols as $key => $value)
                                    <option value="{{ $key }}"
                                        {{ $key == $selectedID ? 'selected' : '' }}>
                                        {{ $value }}
                                    </option>
                                @endforeach
                            </select>
                            @error('type_sol_id') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="contact-info-vertical">Type de climat</label>
                            <select wire:model="climat_id" class="form-control  @error('climat_id') is-invalid @enderror">
                                <option>Choisir le type de climat adéquat</option>
                                @foreach ($climats as $key => $value)
                                    <option value="{{ $key }}"
                                        {{ $key == $selectedID ? 'selected' : '' }}>
                                        {{ $value }}
                                    </option>
                                @endforeach
                            </select>
                            @error('climat_id') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Fertilisation</label>
                            <textarea
                                type="text"
                                row="5"
                                id="first-name-vertical"
                                class="form-control
                                @error('fertilisation') is-invalid @enderror"
                                wire:model='fertilisation'
                                placeholder="fertilisant"
                            >
                            </textarea>
                            @error('fertilisation') <p class="text-danger error">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Irrigation phase de croissance</label>
                            <input type="number" id="first-name-vertical" class="form-control @error('irrigation_phase_croissance') is-invalid @enderror" wire:model='irrigation_phase_croissance' placeholder="Quantité d'eau en mm/surface" />
                            @error('irrigation_phase_croissance') <p class="text-danger error">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Irrigation phase de maturation</label>
                            <input type="number" id="first-name-vertical" class="form-control @error('irrigation_phase_maturite') is-invalid @enderror" wire:model='irrigation_phase_maturite' placeholder="Quantité d'eau en mm/surface" />
                            @error('irrigation_phase_maturite') <p class="text-danger error">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="contact-info-vertical">image spéculation</label>
                            <input type="file" id="contact-info-vertical" class="form-control @error('image') is-invalid @enderror" wire:model='image' name="contact" placeholder="Mobile" />
                            @error('image') <p class="text-danger error">{{ $message }}</p> @enderror
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

