<div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Modification de Variètés de culture</h4>

        </div>
        <div class="card-body">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nom">Nom varièté</label>
                            <input class="form-control" type="hidden" wire:model="id_variete" />
                            <input type="text" id="nom" class="form-control" wire:model="nom_variete" placeholder="Ex: varièté" />
                            @error('nom_variete') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
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
                            <label for="recoltes">Temps de récoltes (jours)</label>
                            <input type="number" id="recoltes" class="form-control" wire:model="temps_de_recolte" placeholder="Ex: 45 jours" />
                            @error('temps_de_recolte') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="planche">Durée Repiquages planches (jours)</label>
                            <input type="number" id="planche" class="form-control" wire:model="repiquage_planche" placeholder="Ex: 25j" />
                            @error('repiquage_planche') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="alvèoles">Durée Repiquages alvéoles (jours)</label>
                            <input type="number" id="alvèoles" class="form-control" wire:model="repiquage_alveole" placeholder="Ex: 15j" />
                            @error('repiquage_alveole') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="arrosage">Intervalle d'arrosage (heures)</label>
                            <input type="number" id="arrosage" class="form-control" wire:model="temps_arrosage" placeholder="ex: 2h" />
                            @error('temps_arrosage') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <button wire:click="update()" class="mr-1 btn btn-info">Modifier</button>
                        <button wire:click="annule()" class="mr-1 btn btn-danger">Annuler</button>
                    </div>
                </div>
        </div>
    </div>
</div>
