<div>
    @livewire('character-creation.creation-center-buttons')
    <div class="container-fluid">
        @switch($activeForm)
            @case('race')
            @livewire('character-creation.race-form.race-creation-form')
            @break

            @case('class')
            
            @break

            @case('character')
            
            @break

            @case('equipment')
            
            @break

            @default
        @endswitch
    </div>
</div>
