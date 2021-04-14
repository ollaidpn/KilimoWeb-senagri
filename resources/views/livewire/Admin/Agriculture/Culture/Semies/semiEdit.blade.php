<div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Modification de Semie</h4>

        </div>
        <div class="card-body">
            <form class="form form-vertical" action="/admin/culture/type-semie/update/ {{ $semie->id }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nom">Nom semie</label>
                            <input type="text" id="nom" value="{{ $semie->nom_semie }}"
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
                                        {{ $key == $semie->culture_id ? 'selected' : '' }}>
                                        {{ $value }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="recoltes">Description</label>
                            <textarea type="text" row="5" id="recoltes" class="form-control" value="{{ $semie->description }}"
                                name="description" placeholder="Ex: description culture">{{ $semie->description }}</textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="planche">Image</label>
                            <input type="file" id="planche" class="form-control"
                                name="image" placeholder="Ex: 25j"/>
                            {{--  --}}
                        </div>
                    </div>
                    <div class="col-6">
                        <img src="{{asset('image/semie/')}}/{{ $semie->image }}" style="width:150px; heigth=150px; border-radius:5%" alt="imageSelect"/>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="mr-1 btn btn-info">Modifier</button>
                        <a class="mr-1 btn btn-danger" href="{{ route('admin-type-semie')}}">Annuler</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
