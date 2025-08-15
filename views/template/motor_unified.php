<div class="tabs">
    <div class="tab-links button__tabs__container">
        <button class="btn-tab" data-id="hotel" data-default>Hotel</button>
        <button class="btn-tab" data-id="service">Servico</button>
        <button class="btn-tab" data-id="flight">Aéreo</button>
        <button class="btn-tab" data-id="dynamic-package">Monte seu pacote</button>
        <button class="btn-tab" data-id="flight-package">pacote aereo</button>
        <button class="btn-tab" data-id="hotel-package">pacote hotel</button>
        <button class="btn-tab" data-id="rodo-hotel-package">pacote Rodoviário</button>
        <button class="btn-tab" data-id="bus-services-package">pacote Rodoviário + serviços</button>
    </div>
    <div class="tab-content">
        <section id="hotel" class="hotel" style="margin: 100px auto; width: fit-content !important">
            <form class="motor_container" autocomplete="off" data-form-hotel>
                <h2>Hospedagem</h2>
                <div class="campos">
                    <div class="input_container input_destino_container">
                        <i class="fa-solid fa-location-dot"></i>
                        <input
                            minlength="3"
                            data-input-destiny="true"
                            autocomplete="true"
                            id="autoComplete"
                            type="search"
                            dir="ltr"
                            spellcheck="false"
                            autocorrect="off"
                            autocomplete="off"
                            autocapitalize="off"
                            maxlength="2048"
                            tabindex="1" />
                    </div>
                    <div class="input_container input_data_container">
                        <i class="fa-solid fa-calendar"></i>
                        <input data-first-date placeholder="Data de ida" type="text" />
                    </div>
                    <div class="input_container input_data_container">
                        <i class="fa-solid fa-calendar"></i>
                        <input data-last-date placeholder="Data de volta" type="text" />
                    </div>
                    <div class="input_container input_config_container">
                        <i class="fa-solid fa-users"></i>
                        <input type="text" placeholder="Hóspedes" data-number-rooms-fake-input />
                        <div class="pax_container">
                            <div class="item">
                                <div class="item_label">
                                    <p>Quartos</p>
                                </div>
                                <div>
                                    <select name="" id="" data-number-rooms></select>
                                </div>
                            </div>
                            <div data-room></div>
                        </div>
                    </div>
                    <div class="input_container input_cupom_container">
                        <i class="fa-solid fa-ticket"></i>
                        <input type="text" placeholder="Cupom" data-input-cupom />
                    </div>

                    <button data-btn-submit type="submit">Buscar</button>
                </div>
            </form>
        </section>

        <section id="service" class="service" style="margin: 100px auto; width: fit-content !important">
            <form class="motor_container" data-form-services>
                <h2>Serviços</h2>
                <div class="campos">
                    <div class="input_container input_destino_container">
                        <i class="fa-solid fa-location-dot"></i>
                        <input
                            minlength="3"
                            data-input-destiny="true"
                            autocomplete="true"
                            id="autoComplete"
                            type="search"
                            dir="ltr"
                            spellcheck="false"
                            autocorrect="off"
                            autocomplete="off"
                            autocapitalize="off"
                            maxlength="2048"
                            tabindex="1" />
                    </div>
                    <div class="input_container input_data_container">
                        <i class="fa-solid fa-calendar"></i>
                        <input data-first-date placeholder="Data de ida" type="text" />
                    </div>
                    <div class="input_container input_data_container">
                        <i class="fa-solid fa-calendar"></i>
                        <input data-last-date placeholder="Data de volta" type="text" />
                    </div>
                    <div class="input_container input_config_container">
                        <i class="fa-solid fa-users"></i>
                        <input type="text" placeholder="Hóspedes" data-number-rooms-fake-input />
                        <div class="pax_container">
                            <div class="item"></div>
                            <div data-room></div>
                        </div>
                    </div>
                    <div class="input_container input_cupom_container">
                        <i class="fa-solid fa-ticket"></i>
                        <input type="text" placeholder="Cupom" data-input-cupom />
                    </div>

                    <button data-btn-submit type="submit">Buscar</button>
                </div>
            </form>
        </section>

        <section id="flight" class="flight" style="margin: 100px auto; width: fit-content !important">
            <form class="motor_container" data-form-flight>
                <h2>Passagem</h2>
                <div data-form-type-route class="type_route_container">
                    <label><input
                            type="radio"
                            name="flightTypeRoute"
                            data-flight-radio
                            value="roundTrip"
                            checked />Ida e volta</label>
                    <label><input type="radio" name="flightTypeRoute" data-flight-radio value="ida" />Somente
                        Ida</label>
                </div>
                <div class="campos">
                    <div class="input_container input_destino_container">
                        <i class="fa-solid fa-location-dot"></i>
                        <input
                            minlength="3"
                            data-input-origin="true"
                            autocomplete="true"
                            type="search"
                            dir="ltr"
                            spellcheck="false"
                            autocorrect="off"
                            autocomplete="off"
                            autocapitalize="off"
                            maxlength="2048"
                            tabindex="1" />
                    </div>
                    <div class="input_container input_destino_container" style="border-radius: 0">
                        <i class="fa-solid fa-location-dot"></i>
                        <input
                            minlength="3"
                            data-input-destiny="true"
                            autocomplete="true"
                            type="search"
                            dir="ltr"
                            spellcheck="false"
                            autocorrect="off"
                            autocomplete="off"
                            autocapitalize="off"
                            maxlength="2048"
                            tabindex="1" />
                    </div>
                    <div class="input_container input_data_container">
                        <i class="fa-solid fa-calendar"></i>
                        <input data-first-date placeholder="Data de ida" type="text" />
                    </div>
                    <div class="input_container input_data_container">
                        <i class="fa-solid fa-calendar"></i>
                        <input data-last-date placeholder="Data de volta" type="text" />
                    </div>
                    <div class="input_container input_config_container">
                        <i class="fa-solid fa-users"></i>
                        <input type="text" placeholder="Hóspedes" data-number-rooms-fake-input />
                        <div class="pax_container">
                            <div class="item"></div>
                            <div data-room></div>
                        </div>
                    </div>
                    <div class="input_container input_cupom_container">
                        <i class="fa-solid fa-ticket"></i>
                        <input type="text" placeholder="Cupom" data-input-cupom />
                    </div>

                    <button data-btn-submit type="submit">Buscar</button>
                </div>
            </form>
        </section>

        <section id="dynamic-package" class="flight" style="margin: 100px auto; width: fit-content !important">
            <form class="motor_container" data-form-dynamic-package>
                <h2>Monte seu pacote</h2>
                <div data-form-type-destination class="type_route_container">
                    <label><input
                            type="radio"
                            data-radio-destiny-diff
                            name="destinationOtherThanTheFlight"
                            value="false"
                            checked />Destino igual do aéreo</label>
                    <label><input
                            type="radio"
                            data-radio-destiny-diff
                            name="destinationOtherThanTheFlight"
                            value="true" />Destino diferente do aéreo</label>
                </div>
                <div class="campos">
                    <div class="input_container input_destino_container">
                        <i class="fa-solid fa-location-dot"></i>
                        <input
                            minlength="3"
                            data-input-origin="true"
                            autocomplete="true"
                            type="search"
                            dir="ltr"
                            spellcheck="false"
                            autocorrect="off"
                            autocomplete="off"
                            autocapitalize="off"
                            maxlength="2048"
                            tabindex="1" />
                    </div>
                    <div class="input_container input_destino_container" style="border-radius: 0">
                        <i class="fa-solid fa-location-dot"></i>
                        <input
                            minlength="3"
                            data-input-destiny="true"
                            autocomplete="true"
                            type="search"
                            dir="ltr"
                            spellcheck="false"
                            autocorrect="off"
                            autocomplete="off"
                            autocapitalize="off"
                            maxlength="2048"
                            tabindex="1" />
                    </div>
                    <div
                        class="input_container input_destino_container"
                        style="border-radius: 0; display: none">
                        <i class="fa-solid fa-location-dot"></i>
                        <input
                            minlength="3"
                            data-input-destiny-diff="true"
                            autocomplete="true"
                            type="search"
                            dir="ltr"
                            spellcheck="false"
                            autocorrect="off"
                            autocomplete="off"
                            autocapitalize="off"
                            maxlength="2048"
                            tabindex="1" />
                    </div>
                    <div class="input_container input_data_container">
                        <i class="fa-solid fa-calendar"></i>
                        <input data-first-date placeholder="Data de ida" type="text" />
                    </div>
                    <div class="input_container input_data_container">
                        <i class="fa-solid fa-calendar"></i>
                        <input data-last-date placeholder="Data de volta" type="text" />
                    </div>
                    <div class="input_container input_config_container">
                        <i class="fa-solid fa-users"></i>
                        <input type="text" placeholder="Hóspedes" data-number-rooms-fake-input />
                        <div class="pax_container">
                            <div class="item">
                                <div class="item_label">
                                    <p>Quartos</p>
                                </div>
                                <div>
                                    <select name="" id="" data-number-rooms></select>
                                </div>
                            </div>
                            <div data-room></div>
                        </div>
                    </div>
                    <div class="input_container input_cupom_container">
                        <i class="fa-solid fa-ticket"></i>
                        <input type="text" placeholder="Cupom" data-input-cupom />
                    </div>

                    <button data-btn-submit type="submit">Buscar</button>
                </div>
            </form>
        </section>

        <section
            id="flight-package"
            class="flight-package"
            style="margin: 100px auto; width: fit-content !important">
            <form class="motor_container" autocomplete="off" data-form-flight-package>
                <h2>Pacote Aéreo</h2>
                <div class="campos">
                    <div class="input_container input_destino_container">
                        <i class="fa-solid fa-location-dot"></i>
                        <input
                            minlength="3"
                            data-input-origin
                            autocomplete
                            type="search"
                            dir="ltr"
                            spellcheck="false"
                            autocorrect="off"
                            autocomplete="off"
                            autocapitalize="off"
                            maxlength="2048"
                            tabindex="1" />
                    </div>
                    <div class="input_container input_destino_container" style="border-radius: 0">
                        <i class="fa-solid fa-location-dot"></i>
                        <input
                            minlength="3"
                            data-input-destiny
                            id="autoComplete"
                            type="search"
                            dir="ltr"
                            autocomplete
                            spellcheck="false"
                            autocorrect="off"
                            autocomplete="off"
                            autocapitalize="off"
                            maxlength="2048"
                            tabindex="1" />
                    </div>
                    <div class="input_container input_data_container">
                        <i class="fa-solid fa-calendar"></i>
                        <input data-first-date placeholder="Data de ida" type="text" />
                    </div>
                    <div class="input_container input_data_container">
                        <i class="fa-solid fa-calendar"></i>
                        <input data-last-date placeholder="Data de volta" type="text" />
                    </div>
                    <div class="input_container input_config_container">
                        <i class="fa-solid fa-users"></i>
                        <input type="text" placeholder="Hóspedes" data-number-rooms-fake-input />
                        <div class="pax_container">
                            <div class="item">
                                <div class="item_label">
                                    <p>Quartos</p>
                                </div>
                                <div>
                                    <select name="" id="" data-number-rooms></select>
                                </div>
                            </div>
                            <div data-room></div>
                        </div>
                    </div>
                    <button data-btn-submit type="submit">Buscar</button>
                </div>
            </form>
        </section>

        <section
            id="hotel-package"
            class="hotel-package"
            style="margin: 100px auto; width: fit-content !important">
            <form class="motor_container" autocomplete="off" data-form-hotel-package>
                <h2>Pacote Hotel</h2>
                <div class="campos">
                    <div class="input_container input_destino_container" style="border-radius: 0">
                        <i class="fa-solid fa-location-dot"></i>
                        <input
                            minlength="3"
                            data-input-destiny
                            id="autoComplete"
                            type="search"
                            dir="ltr"
                            autocomplete
                            spellcheck="false"
                            autocorrect="off"
                            autocomplete="off"
                            autocapitalize="off"
                            maxlength="2048"
                            tabindex="1" />
                    </div>
                    <div class="input_container input_data_container">
                        <i class="fa-solid fa-calendar"></i>
                        <input data-first-date placeholder="Data de ida" type="text" />
                    </div>
                    <div class="input_container input_data_container">
                        <i class="fa-solid fa-calendar"></i>
                        <input data-last-date placeholder="Data de volta" type="text" />
                    </div>
                    <div class="input_container input_config_container">
                        <i class="fa-solid fa-users"></i>
                        <input type="text" placeholder="Hóspedes" data-number-rooms-fake-input />
                        <div class="pax_container">
                            <div class="item">
                                <div class="item_label">
                                    <p>Quartos</p>
                                </div>
                                <div>
                                    <select name="" id="" data-number-rooms></select>
                                </div>
                            </div>
                            <div data-room></div>
                        </div>
                    </div>
                    <button data-btn-submit type="submit">Buscar</button>
                </div>
            </form>
        </section>

        <section
            id="rodo-hotel-package"
            class="rodo-hotel-package"
            style="margin: 100px auto; width: fit-content !important">
            <form class="motor_container" autocomplete="off" data-form-bus-hotel-package>
                <h2>Pacote Rodoviário</h2>
                <div class="campos">
                    <div class="input_container input_destino_container" style="border-radius: 0">
                        <i class="fa-solid fa-location-dot"></i>
                        <input
                            minlength="3"
                            data-input-origin
                            id="autoComplete"
                            type="search"
                            dir="ltr"
                            autocomplete
                            spellcheck="false"
                            autocorrect="off"
                            autocomplete="off"
                            autocapitalize="off"
                            maxlength="2048"
                            tabindex="1" />
                    </div>
                    <div class="input_container input_destino_container" style="border-radius: 0">
                        <i class="fa-solid fa-location-dot"></i>
                        <input
                            minlength="3"
                            data-input-destiny
                            id="autoComplete"
                            type="search"
                            dir="ltr"
                            autocomplete
                            spellcheck="false"
                            autocorrect="off"
                            autocomplete="off"
                            autocapitalize="off"
                            maxlength="2048"
                            tabindex="1" />
                    </div>
                    <div class="input_container input_data_container">
                        <i class="fa-solid fa-calendar"></i>
                        <input data-first-date placeholder="Data de ida" type="text" />
                    </div>
                    <div class="input_container input_config_container">
                        <i class="fa-solid fa-users"></i>
                        <input type="text" placeholder="Hóspedes" data-number-rooms-fake-input />
                        <div class="pax_container">
                            <div class="item">
                                <div class="item_label">
                                    <p>Quartos</p>
                                </div>
                                <div>
                                    <select name="" id="" data-number-rooms></select>
                                </div>
                            </div>
                            <div data-room></div>
                        </div>
                    </div>
                    <button data-btn-submit type="submit">Buscar</button>
                </div>
            </form>
        </section>

        <section
            id="bus-services-package"
            class="bus-services-package"
            style="margin: 100px auto; width: fit-content !important">
            <form class="motor_container" autocomplete="off" data-form-bus-services-package>
                <h2>Pacote Rodoviário + Serviços</h2>
                <div class="campos">
                    <div class="input_container input_destino_container" style="border-radius: 0">
                        <i class="fa-solid fa-location-dot"></i>
                        <input
                            minlength="3"
                            data-input-origin
                            id="autoComplete"
                            type="search"
                            dir="ltr"
                            autocomplete
                            spellcheck="false"
                            autocorrect="off"
                            autocomplete="off"
                            autocapitalize="off"
                            maxlength="2048"
                            tabindex="1" />
                    </div>
                    <div class="input_container input_destino_container" style="border-radius: 0">
                        <i class="fa-solid fa-location-dot"></i>
                        <input
                            minlength="3"
                            data-input-destiny
                            id="autoComplete"
                            type="search"
                            dir="ltr"
                            autocomplete
                            spellcheck="false"
                            autocorrect="off"
                            autocomplete="off"
                            autocapitalize="off"
                            maxlength="2048"
                            tabindex="1" />
                    </div>
                    <div class="input_container input_data_container">
                        <i class="fa-solid fa-calendar"></i>
                        <input data-first-date placeholder="Data de ida" type="text" />
                    </div>
                    <div class="input_container input_config_container">
                        <i class="fa-solid fa-users"></i>
                        <input type="text" placeholder="Hóspedes" data-number-rooms-fake-input />
                        <div class="pax_container">
                            <div data-room></div>
                        </div>
                    </div>
                    <button data-btn-submit type="submit">Buscar</button>
                </div>
            </form>
        </section>
    </div>
</div>

<div data-autocomplete class="selection"></div>
