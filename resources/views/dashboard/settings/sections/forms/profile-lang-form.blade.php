<div class="form-section">
    <h5 class="section-title text-uppercase"><i class="fas fa-language"></i>Idioma y moneda</h5>
    <form action="" class="form">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="companyLang">Idioma</label>
                <select class="form-control selectpicker"
                        data-width="100%"
                        data-size="8"
                        data-dropup-auto="false"
                        data-live-search="true"
                        data-live-search-placeholder="Filtrar por nombre"
                        data-live-search-style='startsWith'
                        id="companyLang">
                        <option value="es-ES" selected>Español</option>
                        <option value="ca-ES">Català</option>
                        <option value="en-GB">English</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="companyFormat">Formato</label>
                <select class="form-control selectpicker"
                        data-width="100%"
                        data-size="8"
                        data-dropup-auto="false"
                        data-live-search="true"
                        data-live-search-placeholder="Filtrar por nombre"
                        data-live-search-style='startsWith'
                        id="companyFormat">
                        <option value="es" selected>ES (07/05/2020 - 1234,56 €)</option>
                        <option value="es-do">DO (07/05/2020 - 1234,56 €)</option>
                        <option value="es-us">US (05/07/2020 - 1234,56 €)</option>
                        <option value="es-mx">MX (07/05/2020 - 1234,56 €)</option>
                        <option value="es-ar">AR (07/05/2020 - € 1,234.56)</option>
                        <option value="es-co">CO (07/05/2020 - 1234,56 €</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="companyCurrency">Moneda</label>
                <select id="companyCurrency" class="form-control selectpicker">
                    <option value="1" selected>€</option>
                </select>
            </div>
        </div>

        <div class="submit-zone">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
        </div>
    </form>
</div>

