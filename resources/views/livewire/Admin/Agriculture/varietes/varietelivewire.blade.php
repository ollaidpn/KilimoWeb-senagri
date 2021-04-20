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
                 @include('livewire.admin.agriculture.varietes.varieteEdit')
            @else
                {{--<livewire:createsemie :updateMode="$updateMode" />--}}
                 @include('livewire.admin.agriculture.varietes.varieteCreate')
            @endif
        </div>
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Liste des variètés</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr style="width: 100%; text-align: center">
                                        <th style="width: 20%">Nom</th>
                                        <th style="width: 20%">Type de Culture</th>
                                        <th style="width: 20%">Repiquage planche</th>
                                        <th style="width: 20%">Repiquage alvéole</th>
                                        <th style="width: 20%">Type d'arrosage</th>
                                        <th style="width: 20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($varietes as $variete)
                                    <tr>
                                        <td>{{ $variete->nom_variete }}</td>
                                        <td style="width: 100%; text-align: center">
                                            {{ $variete->nom_culture }}</td>
                                        <td style="width: 100%; text-align: center">
                                            {{ $variete->repiquage_planche }} jour(s)</td>
                                        <td style="width: 100%; text-align: center">
                                            {{ $variete->repiquage_alveole }} jour(s)</td>
                                        <td style="width: 100%; text-align: center">
                                            {{ $variete->temps_arrosage }} heure(s)</td>

                                        <td style="width: 100%; text-align: center">
                                            <button class="ml-2 btn btn-outline-info" wire:click="edit({{ $variete->id }})">
                                                <i class="fas fa-edit"></i>
                                            </button>

                                            <button wire:click="destroy({{ $variete->id }})" class="ml-2 btn btn-outline-danger">
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
