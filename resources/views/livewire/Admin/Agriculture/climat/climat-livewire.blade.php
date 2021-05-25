<div>
    <div class="row">
        <div class="col-md-4 col-12">
            @if (session()->has('message'))
                <div class="p-2 alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            {{-- Vue créer et modifier --}}

            @if ($updateMode)
                {{--<livewire:editsemie :updateMode="$updateMode" :semieEdit="$semie"/> --}}
                 @include('livewire.admin.agriculture.climat.climatEdit')
            @else
                {{--<livewire:createsemie :updateMode="$updateMode" />--}}
                 @include('livewire.admin.agriculture.climat.climatCreate')
            @endif
        </div>
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Liste des climats</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive rowb">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr >
                                        <th style="width: 80%">Nom climat</th>
                                        <th style="width: 20%; text-align: center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($climats as $climat)
                                        <tr>
                                            <td>{{ $climat->nom_climat }}</td>
                                            <td class='d-flex'>
                                                <button class="ml-2 btn btn-outline-info" wire:click="edit({{ $climat->id }})">
                                                    <i class="fas fa-edit"></i>
                                                </button>

                                                <button wire:click="destroy({{ $climat->id }})" class="ml-2 btn btn-outline-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
