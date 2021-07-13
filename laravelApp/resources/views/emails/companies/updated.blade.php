@component('mail::message')
# La siguiente compañia ha modificado sus datos:
<br>
@foreach( collect($company->getAttributes())->except(['id', 'created_at', 'updated_at', 'active']) as $key => $value )

@switch( $key )
@case('country_id')
*{{ \Lang::get('company-profile.country') }}*: @if($company->isDirty($key)){{ '**' }}@endif{{ $company->country->name }}@if($company->isDirty($key)){{ '**' }}@endif
@break

@case('locale_id')
*{{ \Lang::get('company-profile.language') }}*: @if($company->isDirty($key)){{ '**' }}@endif{{ $company->locale->name }}@if($company->isDirty($key)){{ '**' }}@endif
@break

@case('coin_format_id')
*{{ \Lang::get('company-profile.coin-format') }}*: @if($company->isDirty($key)){{ '**' }}@endif{{ $company->coinFormat->code }} ({{ \Carbon\Carbon::now()->format($company->coinFormat->date_format) }}) {{ $company->coinFormat->coin_format }}@if($company->isDirty($key)){{ '**' }}@endif
@break

@case('coin_id')
*{{ \Lang::get('company-profile.coin') }}*: @if($company->isDirty($key)){{ '**' }}@endif{{ $company->coin->symbol }}@if($company->isDirty($key)){{ '**' }}@endif
@break

@case('package_id')
*{{ \Lang::get('subscription.contracted-package') }}*: @if($company->isDirty($key)){{ '**' }}@endif{{ $company->package->name }}@if($company->isDirty($key)){{ '**' }}@endif
@break

@case('billing_type_id')
*{{ \Lang::get('subscription.billing-type') }}*: @if($company->isDirty($key)){{ '**' }}@endif{{ $company->billingType->name ?? '-' }}@if($company->isDirty($key)){{ '**' }}@endif
@break

@default
*{{ \Lang::get('company-profile.' . str_replace('_', '-', $key)) }}*: @if($company->isDirty($key)){{ '**' }}@endif{{ $value }}@if($company->isDirty($key)){{ '**' }}@endif
@break
@endswitch

@endforeach

<br><br>
**DATOS DE FACTURACIÓN**
@if( $company->billingType->code === 'DB' )
@foreach( $company->banks()->get() as $bank )
@php
$companyBank = \App\Models\Bank::find($bank->id);
@endphp
@foreach( collect($companyBank->getAttributes())->except(['id', 'company_id', 'created_at', 'updated_at']) as $key => $value )
@if( $key !== 'is_dirty' )
@if( $companyBank->is_dirty )

*{{ \Lang::get('bank.' . str_replace('_', '-', $key)) }}*: @if( array_search($key, array_column($companyBank->is_dirty, 'name')) !== false ){{ '**' }}@endif{{ $companyBank[$key] }}@if( array_search($key, array_column($bank->is_dirty, 'name')) !== false ){{ '**' }}@endif

@else

*{{ \Lang::get('bank.' . str_replace('_', '-', $key)) }}*: {{ $companyBank[$key] }}

@endif
@endif
@endforeach
@endforeach
@elseif( $company->billingType->code === 'TC' )

Caducidad tarjéta de crédito: {{ $company->creditCards()->first()->caducity->format('m/y') }}

@endif

<br><br>
*<small>Los datos resaltados en negrita han sido modificados en esta acción.</small>*<br>
*<small>Última actualización el {{ $company->updated_at->format('d/m/Y H:i:s') }}h.</small>*


<br><br>
¡Saludos!<br>
🤖 El robot del equipo técnico de {{ config('app.name') }}<br>
<small>_¡Toda resistencia es fútil!, humanos_</small>
@endcomponent
