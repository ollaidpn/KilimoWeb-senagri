<div class="row">
    @if ($updateMode)
       @include('livewire.Admin.Agriculture.type-culture.updateTypeCulture')
    @else
        @include('livewire.Admin.Agriculture.type-culture.addFormTypeCulture')
    @endif
    @include('livewire.Admin.Agriculture.type-culture.listTypeCulture')
</div>
