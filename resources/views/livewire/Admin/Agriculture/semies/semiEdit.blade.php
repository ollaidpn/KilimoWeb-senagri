<div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Modification de Semie</h4>
        </div>
        <div class="card-body">

                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nom">Nom semie</label>
                            <input class="form-control @error('nom_semie') is-invalid @enderror" type="hidden" wire:model="id_semie" placeholder="Ex: varièté" />
                            <input type="text" id="nom"
                                class="form-control" wire:model="nom_semie" placeholder="Ex: semie" />
                                @error('nom_semie') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="contact-info-vertical">Type de culture</label>
                            <select wire:model="culture_id" class="form-control @error('culture_id') is-invalid @enderror">
                                <option>Choisir le type de culture</option>
                                @foreach ($cultures as $key => $value)
                                    <option value="{{ $key }}"
                                        {{ $key == 1 ? 'selected' : '' }}>
                                        {{ $value }}
                                    </option>
                                @endforeach
                            </select>
                            @error('culture_id') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="recoltes">Description</label>
                            <textarea type="text" row="5" id="recoltes" class="form-control @error('description') is-invalid @enderror"
                                wire:model="description" placeholder="Ex: description culture">
                            </textarea>
                            @error('description') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
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
                        <button wire:click="update()" class="mr-1 btn btn-info">Modifier</button>
                        <button wire:click="annule()" class="mr-1 btn btn-warning">Annuler</button>
                    </div>
                </div>

        </div>
    </div>
</div>
