<div class="form-section">
    <h5 class="form-section_title">
        @lang('company-profile.language-coin')
    </h5>
    <div class="form-row">
        <div class="form-group col-md-4" wire:ignore>
            <label for="language">@lang('company-profile.language')</label>
            <select class="form-control selectpicker"
                    id="locale_id"
                    name="locale_id"
                    data-width="100%"
                    data-size="8"
                    data-dropup-auto="false"
                    data-live-search="false"
                    data-live-search-placeholder=""
                    data-live-search-style='startsWith'
                    data-container="body"
                    title="@lang('main.select')"
                    wire:model.defer="locale_id">
                    @foreach( \App\Models\Locale::all() as $locale )
                        <option value="{{ $locale->id }}" @if($locale->id === $locale_id) selected @endif>{{ $locale->name }}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-group col-md-4" wire:ignore>
            <label for="coin_format_id">@lang('company-profile.coin-format')</label>
            <select class="form-control selectpicker"
                    id="coin_format_id"
                    name="coin_format_id"
                    data-width="100%"
                    data-size="8"
                    data-dropup-auto="false"
                    data-live-search="false"
                    data-live-search-placeholder=""
                    data-live-search-style='startsWith'
                    data-container="body"
                    title="@lang('main.select')"
                    wire:model.defer="coin_format_id">
                    @foreach( \App\Models\CoinFormat::all() as $coinFormat )
                        <option value="{{ $coinFormat->id }}" @if($coinFormat->id === $coin_format_id) selected @endif>{{ $coinFormat->code }} ({{ \Carbon\Carbon::now()->format($coinFormat->date_format) }}) {{ $coinFormat->coin_format }}</option>
                    @endforeach
                    {{--
                        <option value="es" >ES (07/05/2020 - 1234,56 €)</option>
                        <option value="es-do">DO (07/05/2020 - 1234,56 €)</option>
                        <option value="es-us">US (05/07/2020 - 1234,56 €)</option>
                        <option value="es-mx">MX (07/05/2020 - 1234,56 €)</option>
                        <option value="es-ar">AR (07/05/2020 - € 1,234.56)</option>
                        <option value="es-co">CO (07/05/2020 - 1234,56 €</option>
                    --}}
            </select>
        </div>
        <div class="form-group col-md-4" wire:ignore>
            <label for="coin_id">@lang('company-profile.coin') {{ $coin_id }}</label>
            <select id="coin_id" name="coin_id" class="form-control selectpicker"
                    title="@lang('main.select')"
                    wire:model.defer="coin_id">
                    @foreach( \App\Models\Coin::all() as $coin )
                        <option value="{{ $coin->id }}" @if($coin->id === $coin_id) selected @endif>{{ $coin->symbol }}</option>
                    @endforeach
            </select>
        </div>
    </div>
</div>

