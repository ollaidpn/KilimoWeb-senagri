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
                 @include('livewire.admin.agriculture.sols.solsEdit')
            @else
                {{--<livewire:createsemie :updateMode="$updateMode" />--}}
                 @include('livewire.admin.agriculture.sols.solsCreate')
            @endif
        </div>
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Liste des semies</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive rowb">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr style="width: 100%; text-align: center">
                                        <th style="width: 20%">Nom</th>
                                        <th style="width: 20%">Type de Culture</th>
                                        <th style="width: 20%">Description</th>
                                        <th style="width: 20%">Image</th>
                                        <th style="width: 20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($sols as $sol)
                                        <tr>
                                            <td>{{ $sol->type_de_sol }}</td>
                                            <td style="width: 100%; text-align: center">
                                                {{ $sol->type_de_sol }}</td>
                                            <td style="width: 100%; text-align: center">
                                                {{ $sol->type_de_sol }}
                                            </td>
                                            <td style="width: 100%; text-align: center">
                                                <span class="avatar">
                                                    <img
                                                        class="round"
                                                        src="{{ asset('/storage/app/image/sol/'.$sol->image) }}"
                                                        width="80"
                                                        heigth="80"
                                                    />
                                                </span>
                                            </td>
                                            <td class='d-flex'>
                                                <button class="ml-2 btn btn-outline-info" wire:click="edit({{ $sol->id }})">
                                                    <i class="fas fa-edit"></i>
                                                </button>

                                                <button wire:click="destroy({{ $sol->id }})" class="ml-2 btn btn-outline-danger">
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
