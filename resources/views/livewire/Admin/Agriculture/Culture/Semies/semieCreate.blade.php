<div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Ajouter une Semie</h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical" wire:submit.prevent="addSemie" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nom">Nom semie</label>
                            <input type="text" id="nom" class="form-control" wire:model="nom_semie" placeholder="Ex: varièté" />
                            @error('nom_semie') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="contact-info-vertical">Type de culture</label>
                            <select wire:model="culture_id" class="form-control">
                                <option>Choisir le type de culture</option>
                                @foreach ($cultures as $key => $value)
                                    <option value="{{ $key }}"
                                        {{ $key == $selectedID ? 'selected' : '' }}>
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
                            <textarea type="text" row="5" id="recoltes" class="form-control"
                                wire:model="description" placeholder="Ex: description culture">
                            </textarea>
                            @error('description') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="planche">Image</label><br>
                            <input type="file" id="planche" class="form-control" wire:model="image" placeholder="Ex: 25j" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group flex-end">
                            @error('image') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                            <div wire:loading wire:target="image">Uploading...</div>
                            @if ($image)
                                Photo Preview<br>
                                <img src="{{ $image->temporaryUrl() }}" width="150" height="150"/>
                            @endif
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
