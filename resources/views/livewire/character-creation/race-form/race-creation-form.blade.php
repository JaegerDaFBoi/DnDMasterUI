<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card creation-center_form">
                <div class="card-header">
                    <h1 class="creation-center_form_title">Agregar Raza</h1>
                </div>
                <div class="card-body">
                    @if ($error_message)
                        {{ $error_message }}
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="race_name">Nombre de la raza</label>
                                <input type="text" class="form-control form-control-border" name="race_name"
                                    id="race_name" wire:model='race_name'>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="race_description">Descripcion de la raza</label>
                                <textarea class="form-control form-control-border" name="race_description" id="race_description" cols="8"
                                    rows="5" wire:model='race_description'></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="race_size">Envergadura</label>
                                <select class="form-control" name="race_size" id="race_size" wire:model='race_size'>
                                    <option value="" selected>Seleccionar</option>
                                    @foreach (App\Enums\SizeEnum::values() as $key => $value)
                                        <option value="{{ $key }}">{{ $key }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="speed">Velocidad</label>
                                <div class="input-group">
                                    <input type="number" class="form-control form-control-border" name="speed"
                                        id="speed" wire:model='race_speed'>
                                    <div class="input-group-append">
                                        <span class="input-group-text">ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="fly_speed">Vel. Vuelo</label>
                                <div class="input-group">
                                    <input type="number" class="form-control form-control-border" name="fly_speed"
                                        id="fly_speed" wire:model='race_fly_speed'>
                                    <div class="input-group-append">
                                        <span class="input-group-text">ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="swim_speed">Vel. Nado</label>
                                <div class="input-group">
                                    <input type="number" class="form-control form-control-border" name="swim_speed"
                                        id="swim_speed" wire:model='race_swim_speed'>
                                    <div class="input-group-append">
                                        <span class="input-group-text">ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="language">Idioma</label>
                                <div class="language_input">
                                    <input type="text" class="form-control form-control-border" name="language"
                                        id="language" wire:model='language_input'>
                                    <button class="btn language_add-button" wire:click='addLanguage'>
                                        <span class="form_button_label">Agregar</span>
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="added-languages_container">
                                <span class="added-languages_label">
                                    Idiomas agregados
                                </span>
                                <ul class="added-languages_list">
                                    @foreach ($languages as $index => $language)
                                        <li class="added-languages_list_item">
                                            <span>{{ $language }}</span>
                                            <button class="btn btn-sm language_remove-button"
                                                wire:click='removeLanguage({{ $index }})'>
                                                <span class="button_icon">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                            </button>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="score-increase_title text-center">
                                    Aumento en puntuacion de caracteristicas
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="strenght">Fuerza</label>
                                <input type="number" class="form-control form-control-border" min="0"
                                    name="strenght" id="strength" wire:model='str'>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="dexterity">Destreza</label>
                                <input type="number" class="form-control form-control-border" min="0"
                                    name="dexterity" id="dexterity" wire:model='dex'>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="constitution">Constitucion</label>
                                <input type="number" class="form-control form-control-border" min="0"
                                    name="constitution" id="constitution" wire:model='con'>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="intelligence">Inteligencia</label>
                                <input type="number" class="form-control form-control-border" min="0"
                                    name="intelligence" id="intelligence" wire:model='int'>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="wisdom">Sabiduria</label>
                                <input type="number" class="form-control form-control-border" min="0"
                                    name="wisdom" id="wisdom" wire:model='wis'>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="charisma">Carisma</label>
                                <input type="number" class="form-control form-control-border" min="0"
                                    name="charisma" id="charisma" wire:model='cha'>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="traits_title text-center">
                                    Rasgos
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="trait_title">Titulo</label>
                                <input type="text" class="form-control form-control-border" name="trait_title"
                                    id="trait_title" wire:model='trait_title'>
                            </div>
                            <div class="form-group">
                                <label for="trait_description">Descripcion</label>
                                <textarea class="form-control form-control-border" name="trait_description" id="trait_description" cols="8"
                                    rows="5" wire:model='trait_description'></textarea>
                            </div>
                            <button class="btn add-trait_button" wire:click='addTrait'>
                                <span class="form_button_label">Agregar</span>
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <div class="col-md-6">
                            <div class="added-traits_container">
                                <span class="added-traits_label">Rasgos agregados</span>
                                <ul class="added-traits_list accordion" id="traitsAccordion">
                                    @foreach ($traits as $index => $trait)
                                        <li class="added-traits_list_item">
                                            <div class="trait-list_item_container">
                                                <span class="trait-list_item_title"
                                                    id="traitItem{{ $index }}">{{ $trait['title'] }}</span>
                                                <button class="btn btn-sm trait_info-button" type="button"
                                                    data-toggle="collapse" data-target="#collapse{{ $index }}"
                                                    aria-expanded="true" aria-controls="collapse{{ $index }}">
                                                    <span class="button_icon">
                                                        <i class="fas fa-search"></i>
                                                    </span>
                                                </button>
                                            </div>
                                            <button class="btn btn-sm trait_remove-button"
                                                wire:click='removeTrait({{ $index }})'>
                                                <span class="button_icon">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                            </button>
                                        </li>
                                        <div id="collapse{{ $index }}"
                                            class="collapse trait-description_container"
                                            aria-labelledby="traitItem{{ $index }}"
                                            data-parent="#traitsAccordion">
                                            <span>{{ $trait['description'] }}</span>
                                        </div>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="creation-center_form_action-button">
                                <button class="btn btn-md action-button_container" data-toggle="modal"
                                    data-target="#raceSummaryModal">
                                    <span>Guardar datos de raza</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="raceSummaryModal" tabindex="-1" role="dialog"
        aria-labelledby="raceSummaryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg summary_modal" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="raceSummaryModalLabel">
                        Resumen de la Raza
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Nombre</h5>
                            <p>{{ $race_name }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Descripcion</h5>
                            <p>{{ $race_description }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Envergadura</h5>
                            <p>{{ $race_size }}</p>
                        </div>
                        <div class="col-md-3">
                            <h5>Velocidad</h5>
                            <p>{{ $race_speed }} ft</p>
                        </div>
                        <div class="col-md-3">
                            <h5>Velocidad Vuelo</h5>
                            <p>{{ $race_fly_speed }} ft</p>
                        </div>
                        <div class="col-md-3">
                            <h5>Velocidad Nado</h5>
                            <p>{{ $race_swim_speed }} ft</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Idiomas</h5>
                            <ul>
                                @foreach ($languages as $language)
                                    <li>
                                        <p>{{ $language }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Rasgos</h5>
                            <ul>
                                @foreach ($traits as $index => $trait)
                                <li>
                                    <p>{{ $trait['title'] }}</p>
                                    <p>{{ $trait['description'] }}</p>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <h5>Fuerza</h5>
                            <p>+ {{ $str }}</p>
                        </div>
                        <div class="col-md-2">
                            <h5>Destreza</h5>
                            <p>+ {{ $dex }}</p>
                        </div>
                        <div class="col-md-2">
                            <h5>Constitucion</h5>
                            <p>+ {{ $con }}</p>
                        </div>
                        <div class="col-md-2">
                            <h5>Inteligencia</h5>
                            <p>+ {{ $int }}</p>
                        </div>
                        <div class="col-md-2">
                            <h5>Sabiduria</h5>
                            <p>+ {{ $wis }}</p>
                        </div>
                        <div class="col-md-2">
                            <h5>Carisma</h5>
                            <p>+ {{ $cha }}</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
