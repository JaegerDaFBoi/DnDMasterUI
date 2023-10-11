<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="action_buttons race-class">
                        <div class="action_buttons_wrap">
                            <div class="card action_buttons_inner">
                                <div class="action_button_container">
                                    <button class="btn action_button" wire:click="showForm('race')">
                                            Crear Raza
                                    </button>
                                </div>
                                <div class="action_button_container">
                                    <button class="btn action_button" wire:click="showForm('class')">
                                            Crear Clase
                                    </button>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="action_buttons character-equipment">
                        <div class="action_buttons_wrap">
                            <div class="card action_buttons_inner">
                                <div class="action_button_container">
                                    <button class="btn action_button" wire:click="showForm('character')">
                                        Crear Personaje
                                    </button>
                                </div>
                                <div class="action_button_container">
                                    <button class="btn action_button" wire:click="showForm('equipment')">
                                            Crear Equipamiento
                                    </button>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>