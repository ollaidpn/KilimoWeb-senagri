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
                            <input class="form-control @error('id_sol') is-invalid @enderror" type="hidden" wire:model="id_sol" placeholder="" />
                            <input type="text" id="nom"
                                class="form-control" wire:model="type_de_sol" placeholder="" />
                                @error('type_de_sol') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
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
                                <img src="{{asset('storage/image/sol/'.$imageView)}}/" style="width:150px; heigth=150px; border-radius:5%" alt="imageSelect"/>
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
