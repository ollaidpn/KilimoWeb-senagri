<div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Ajouter une Variètés de culture</h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical" wire:submit.prevent="addVariete" method="POST">
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
                            <select wire:model="speculation_id" class="form-control @error('speculation_id') is-invalid @enderror">
                                <option>Choisir la spéculation</option>
                                @foreach ($cultures as $key => $value)
                                    <option value="{{ $key }}"
                                        {{ $key == $selectedID ? 'selected' : '' }}>
                                        {{ $value }}
                                    </option>
                                @endforeach
                            </select>
                            @error('speculation_id') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
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
                            <label for="contact-info-vertical">Type de semie</label>
                            <select wire:model="type_semie_id" class="form-control  @error('type_semie_id') is-invalid @enderror">
                                <option>Choisir le type de semie pour la pépinière</option>
                                @foreach ($semies as $key => $value)
                                    <option value="{{ $key }}"
                                        {{ $key == $selectedID ? 'selected' : '' }}>
                                        {{ $value }}
                                    </option>
                                @endforeach
                            </select>
                            @error('type_semie_id') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Resistance maladie</label>
                            <textarea
                                type="text"
                                row="5"
                                id="first-name-vertical"
                                class="form-control
                                @error('resistance_maladie') is-invalid @enderror"
                                wire:model='resistance_maladie'
                                placeholder="les maladies auquelles il est résistant"
                            >
                            </textarea>
                            @error('resistance_maladie') <p class="text-danger error">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Resistance ravageur</label>
                            <textarea
                                type="text"
                                row="5"
                                id="first-name-vertical"
                                class="form-control
                                @error('resistance_ravageur') is-invalid @enderror"
                                wire:model='resistance_ravageur'
                                placeholder="les ravageurs auquels il est résistant"
                            >
                            </textarea>
                            @error('resistance_ravageur') <p class="text-danger error">{{ $message }}</p> @enderror
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
                            <label for="arrosage">Rendement</label>
                            <input type="number" id="arrosage" class="form-control @error('rendement') is-invalid @enderror" wire:model="rendement" placeholder="ex: " />
                            @error('rendement') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
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
