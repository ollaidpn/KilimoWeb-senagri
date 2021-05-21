<div class="col-md-4 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Modifier culture</h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Nom Spéculation</label>
                            <input type="hidden" id="first-name-vertical" class="form-control @error('culture_id') is-invalid @enderror" wire:model='culture_id' placeholder="" />
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
                            <label for="planche">Image</label><br>
                            <input type="file" id="planche" class="form-control @error('image') is-invalid @enderror"
                                wire:model="image"/>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group flex-end">
                            @error('image') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                            <div wire:loading wire:target="image">Uploading...</div>
                            @if ($image)
                                Photo Preview<br>
                                <img src="{{ $image->temporaryUrl() }}" width="150" height="150">
                            @else
                                <img src="{{asset('storage/image/semie/'.$imageView)}}/" style="width:150px; heigth=150px; border-radius:5%" alt="imageSelect"/>
                            @endif
                        </div>
                    </div>


                    <div class="col-12">
                        <button wire:click.prevent='update()' class="mr-1 btn btn-primary">Validez</button>
                        <button wire:click.prevent='cancel' class="mr-1 btn btn-warning">Annulez</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
