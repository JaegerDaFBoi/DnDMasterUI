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

    @push('scripts')
        <script>
            window.addEventListener('alertError', function(e) {
                let html = '<ul>';
                let array = e.detail.text;
                for (var index = 0; index < array.length; index++) {
                    html += '<li>' + array[index] + '</li>';
                }
                html = html += '</ul>';
                Swal.fire({
                    title: e.detail.title,
                    html: html,
                    icon: e.detail.icon,
                    iconColor: e.detail.iconColor,
                    background: '#F7CE65',
                    color: '#26394D',
                    timer: 6000,
                    toast: true,
                    position: 'top-right',
                    timerProgressBar: true,
                    confirmButtonColor: '#930C10'
                });
                console.log(e.detail.text);
            });
        </script>
        @if (session()->has('message'))
            <script type="text/javascript">
            function message() {
                Swal.fire({
                    title: 'Proceso finalizado',
                    text: "{{ session()->get('message') }}",
                    icon: 'success',
                    iconColor: 'green',
                    background: '#F7CE65',
                    color: '#26394D',
                    timer: 6000,
                    toast: true,
                    position: 'top-right',
                    timerProgressBar: true,
                    showConfirmButton: false
                });
            }
            console.log('Executed');
            window.onload = message; 
            </script>
        @endif
    @endpush
</div>
