<div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Ajouter une Semie</h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical" action="{{ route('admin-type-semie-create') }}" enctype="multipart/form-data"
                method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nom">Nom semie</label>
                            <input type="text" id="nom"
                                class="form-control" name="nom_semie" placeholder="Ex: varièté" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="contact-info-vertical">Type de culture</label>
                            <select name="culture_id" class="form-control">
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
                            <label for="recoltes">Description</label>
                            <textarea type="text" row="5" id="recoltes" class="form-control"
                                name="description" placeholder="Ex: description culture"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="planche">Image</label>
                            <input type="file" id="planche" class="form-control"
                                name="image" placeholder="Ex: 25j" onchange="previewFile(this)"/>
                            {{-- <img id="imagePreview" style="width:130px" alt="imageSelect"/> --}}
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
