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
                            <label for="first-name-vertical">Nom Culture</label>
                            <input type="text" id="first-name-vertical" class="form-control" wire:model='nom_culture' placeholder="Nom culture" wire:model='nom_culture' />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Decription</label>
                            <textarea type="text" id="first-name-vertical" class="form-control" wire:model='description' placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="contact-info-vertical">image</label>
                            <input type="file" id="contact-info-vertical" class="form-control" wire:model='image' placeholder="Mobile" />
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
