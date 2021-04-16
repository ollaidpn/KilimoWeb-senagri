<div class='row'>
    @if ($updateMode)
       @include('livewire.Admin.Agriculture.typeCulture.updateTypeCulture')
    @else
        @include('livewire.Admin.Agriculture.typeCulture.addFormTypeCulture')
    @endif
    @include('livewire.Admin.Agriculture.typeCulture.listTypeCulture')
</div>
