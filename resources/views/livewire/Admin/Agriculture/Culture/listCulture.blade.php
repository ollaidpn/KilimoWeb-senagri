<div class="col-md-8 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Liste des Cultures</h4>
        </div>
        <div class="ml-2 card-content">
            <div class="card-body card-dashboard">
                <div class="table-responsive">
                    <table class="table zero-configuration">
                        <thead>
                            <tr style="width: 100%">
                                <th style="width: 20%">Id</th>
                                <th style="width: 20%">Type de culture</th>
                                <th style="width: 20%">Nom culture</th>
                                <th style="width: 20%">decsription</th>
                                <th style="width: 20%">Image</th>
                                <th style="width: 20%">Création</th>
                                <th style="width: 20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cultures as $culture)
                            <tr>
                                <td>{{$culture->id}}</td>
                                <td>{{$culture->typeculture_id}}</td>
                                <td>{{$culture->nom_culture}}</td>
                                <td>{{$culture->description}}</td>
                                <td>
                                    <span class="avatar">
                                        <img class="round" src="{{asset("image/culture")}}/{{$culture->image}}" width="80" heigth="80" alt="image" />
                                    </span>
                                </td>
                                <td>{{$culture->created_at}}</td>
                                <td class="pt-2 d-flex">
                                    <button class="btn btn-outline-info" wire:click='edit({{$culture->id}})'><i class="fas fa-edit"></i></button>
                                    <button class="ml-2 btn btn-outline-danger" wire:click='destroy({{$culture->id}})'><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
