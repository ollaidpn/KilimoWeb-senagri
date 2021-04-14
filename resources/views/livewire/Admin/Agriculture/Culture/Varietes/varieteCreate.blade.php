<div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Ajouter une Variètés de culture</h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical" action="{{ route('admin-varietesCulture-create') }}"
                method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nom">Nom varièté</label>
                            <input type="text" id="nom"
                                class="form-control" name="varieteName" placeholder="Ex: varièté" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="contact-info-vertical">Type de culture</label>
                            <select name="typeCulture" class="form-control">
                                <option>Choisir le type de culture</option>
                                @foreach ($cultures as $key => $value)
                                    <option value="{{ $key }}"
                                        {{ $key == $selectedID ? 'selected' : '' }}>
                                        {{ $value }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="recoltes">Temps de récoltes (jours)</label>
                            <input type="number" id="recoltes" class="form-control"
                                name="tempsRecolte" placeholder="Ex: 45 jours" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="planche">Durée Repiquages planches (jours)</label>
                            <input type="number" id="planche" class="form-control"
                                name="repiPlanche" placeholder="Ex: 25j" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="alvèoles">Durée Repiquages alvéoles (jours)</label>
                            <input type="number" id="alvèoles" class="form-control"
                                name="repiAlveole" placeholder="Ex: 15j" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="arrosage">Intervalle d'arrosage (heures)</label>
                            <input type="number" id="arrosage" class="form-control" name="arrosage"
                                placeholder="ex: 2h" />
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
