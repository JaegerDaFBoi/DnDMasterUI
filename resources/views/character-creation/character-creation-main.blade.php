@extends('layout.creation-layout')
@section('character-content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12 creation-center_title">
                <h1 class="creation-center_title_text">Creation Center</h1>
            </div>
        </div>
        @livewire('character-creation.creation-center')
    </div>
</section>
@endsection