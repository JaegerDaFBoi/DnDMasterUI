<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card creation-center_form">
                <div class="card-header">
                    <h1 class="creation-center_form_title">Agregar Raza</h1>
                </div>
                <div class="card-body">
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
                                <label for="race_size">Envergadura</label>
                                <select class="form-control" name="race_size" id="race_size" wire:model='race_size'>
                                    @foreach (App\Enums\SizeEnum::values() as $key => $value)
                                        <option value="{{ $key }}">{{ $key }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
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
                        <div class="col-md-4">
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
                        <div class="col-md-4">
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
                                    <button class="btn btn-info language_add-button">
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
                                    @foreach ($languages as $language)
                                        <li class="added-languages_list_item">
                                            <span>{{ $language }}</span>
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
                            <button class="btn add-trait_button">
                                <span class="form_button_label">Agregar</span>
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <div class="col-md-6">
                            <div class="added-traits_container">
                                <span class="added-traits_label">Rasgos agregados</span>
                                <ul class="added-traits_list">

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>