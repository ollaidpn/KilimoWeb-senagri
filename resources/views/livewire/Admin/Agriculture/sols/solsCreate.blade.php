<div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Ajouter un sol</h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical" wire:submit.prevent="addSemie" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nom">Nom du sol</label>
                            <input type="text" id="nom" class="form-control  @error('type_de_sol') is-invalid @enderror" wire:model="type_de_sol" placeholder="Ex: sol sableu" />
                            @error('type_de_sol') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="planche">Image</label><br>
                            <input type="file" id="planche" class="form-control  @error('image') is-invalid @enderror" wire:model="image" placeholder="Ex: 25j" />
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
