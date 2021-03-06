<div class="col-md-8 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Liste des Types de culture</h4>
        </div>
        <div class="card-content">
            <div class="card-body card-dashboard">
                <div class="table-responsive">
                    <table class="table zero-configuration">
                        <thead>
                            <tr style="width: 100%">
                                <th style="width: 20%">Id</th>
                                <th style="width: 20%">Nom</th>
                                <th style="width: 20%">Création</th>
                                <th style="width: 20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($culture_types as $culture_type)
                            <tr>
                                <td>{{$culture_type->id}}</td>
                                <td>{{$culture_type->nom_typeculture}}</td>
                                <td>{{$culture_type->created_at}}</td>
                                <td class='d-flex'>
                                    <button class='btn btn-outline-info' wire:click='edit({{$culture_type->id}})'><i class="fas fa-edit"></i></button>
                                    <button class='ml-2 btn btn-outline-danger' wire:click='destroy({{$culture_type->id}})'><i class="fas fa-trash-alt"></i></button>
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
