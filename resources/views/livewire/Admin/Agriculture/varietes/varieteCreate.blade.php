<div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Ajouter une Variètés de culture</h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical"wire:submit.prevent="addVariete" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nom">Nom varièté</label>
                            <input type="text" id="nom" class="form-control @error('nom_variete') is-invalid @enderror" wire:model="nom_variete" placeholder="Ex: varièté" />
                            @error('nom_variete') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="contact-info-vertical">Spéculation</label>
                            <select wire:model="culture_id" class="form-control @error('culture_id') is-invalid @enderror">
                                <option>Choisir la spéculation</option>
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
                            <input type="number" id="recoltes" class="form-control @error('temps_de_recolte') is-invalid @enderror" wire:model="temps_de_recolte" placeholder="Ex: 45 jours" />
                            @error('temps_de_recolte') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="planche">Durée Repiquages planches (jours)</label>
                            <input type="number" id="planche" class="form-control @error('repiquage_planche') is-invalid @enderror" wire:model="repiquage_planche" placeholder="Ex: 25j" />
                            @error('repiquage_planche') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="alvèoles">Durée Repiquages alvéoles (jours)</label>
                            <input type="number" id="alvèoles" class="form-control @error('repiquage_alveole') is-invalid @enderror" wire:model="repiquage_alveole" placeholder="Ex: 15j" />
                            @error('repiquage_alveole') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="arrosage">Intervalle d'arrosage (heures)</label>
                            <input type="number" id="arrosage" class="form-control @error('nom_culture') is-invalid @enderror" wire:model="temps_arrosage" placeholder="ex: 2h" />
                            @error('temps_arrosage') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
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
