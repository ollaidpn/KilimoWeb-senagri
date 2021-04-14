<div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Modification de Variètés de culture</h4>

        </div>
        <div class="card-body">
            <form class="form form-vertical" action="/admin/culture/varietes/update/ {{ $variete->id }}"
                method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nom">Nom varièté</label>
                            <input type="text" id="nom" value="{{ $variete->nom_variete }}"
                                class="form-control" name="nom_variete" placeholder="Ex: varièté" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="contact-info-vertical">Type de culture</label>
                            <select name="culture_id" class="form-control" value="{{ $variete->culture_id }}">
                                <option>Choisir le type de culture</option>
                                @foreach ($cultures as $key => $value)
                                    <option value="{{ $key }}"
                                        {{ $key == $variete->culture_id ? 'selected' : '' }}>
                                        {{ $value }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="recoltes">Temps de récoltes (jours)</label>
                            <input type="number" id="recoltes" class="form-control" value="{{ $variete->temps_de_recolte }}"
                                name="temps_de_recolte" placeholder="Ex: 45 jours" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="planche">Durée Repiquages planches (jours)</label>
                            <input type="number" id="planche" class="form-control" value="{{ $variete->repiquage_planche }}"
                                name="repiquage_planche" placeholder="Ex: 25j" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="alvèoles">Durée Repiquages alvéoles (jours)</label>
                            <input type="number" id="alvèoles" class="form-control" value="{{ $variete->repiquage_alveole }}"
                                name="repiquage_alveole" placeholder="Ex: 15j" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="arrosage">Intervalle d'arrosage (heures)</label>
                            <input type="number" id="arrosage" class="form-control" name="temps_arrosage" value="{{ $variete->temps_arrosage }}"
                                placeholder="ex: 2h" />
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="mr-1 btn btn-info">Modifier</button>
                        <a class="mr-1 btn btn-danger" href="{{ route('admin-varietesCulture')}}">Annuler</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
