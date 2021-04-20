<div class="row">
    @if ($updateMode)
        @include('livewire.Admin.Agriculture.Culture.updateFormCulture')
    @else
        @include('livewire.Admin.Agriculture.Culture.addFormCulture')
    @endif
    @include('livewire.Admin.Agriculture.Culture.listCulture')
</div>
