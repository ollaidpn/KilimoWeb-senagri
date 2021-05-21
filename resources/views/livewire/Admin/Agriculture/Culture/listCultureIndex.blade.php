<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Liste des Spéculations</h4>
        </div>
        <div class="ml-2 card-content">
            <div class="card-body card-dashboard">
                <div class="table-responsive">
                    <table class="table zero-configuration">
                        <thead>
                            <tr style="width: 100%; text-align: center">
                                <th style="width: 20%">Nom spéculation</th>
                                <th style="width: 20%">Type de culture</th>
                                <th style="width: 20%">Climat adéquat</th>
                                <th style="width: 20%">Sol adéquat</th>
                                <th style="width: 20%">Image</th>
                                <th style="width: 20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cultures as $culture)
                            <tr style="text-align: center; width: 100%;">
                                <td style="text-align: left">{{$culture->nom_speculation}}</td>
                                <td>{{$culture->nom_typeculture}}</td>
                                <td>{{$culture->nom_climat}}</td>
                                <td>{{$culture->type_de_sol}}</td>
                                <td style="width: 100%; text-align: center">
                                    <span class="avatar">
                                        <img
                                            class="round"
                                            src="{{ asset('image/semie/'.$culture->image) }}"
                                            width="80"
                                            heigth="80"
                                        />
                                    </span>
                                </td>
                                <td class="pt-2 d-flex">
                                    <button class="btn btn-outline-info" {{-- wire:click='edit({{$culture->id}})' --}}><i class="fas fa-eye"></i></button>
                                    <button class="ml-2 btn btn-outline-danger" {{-- wire:click='destroy({{$culture->id}})' --}}><i class="fas fa-trash-alt"></i></button>
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
