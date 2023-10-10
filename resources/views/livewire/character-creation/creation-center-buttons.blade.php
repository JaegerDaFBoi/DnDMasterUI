<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="action_buttons race-class">
                        <div class="action_buttons_wrap">
                            <div class="card action_buttons_inner">
                                <div class="action_button_container">
                                    <button class="btn btn-info" wire:click="showForm('race')">
                                            Add Race
                                    </button>
                                </div>
                                <div class="action_button_container">
                                    <button class="btn btn-info" wire:click="showForm('class')">
                                            Add Class
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
                                    <button class="btn btn-info" wire:click="showForm('character')">
                                        Add Character
                                    </button>
                                </div>
                                <div class="action_button_container">
                                    <button class="btn btn-info" wire:click="showForm('equipment')">
                                            Add Equipment
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