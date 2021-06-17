@extends('layouts.app-login')

@section('content')
<div class="container">
    <div class="row justify-content-center font-italic">

        <div class="col-9 col-sm-8 col-md-5 col-lg-4 col-xl-4">
            <h4 class="text-welcome mb-2">@lang('login.forgot-you-password')</h4>

            <p class="text-center mb-4">
                @lang('login.forgot-you-password-text')
            </p>

            <form method="POST" action="{{ route('password.email') }}" class="text-center">

                <img src="{{ asset('img/logos/tam-rh.svg') }}" alt="Logo TAM-RH" class="box-login_logo img-fluid">

                @csrf
                <div class="form-group">
                    <label for="email">@lang('login.email')</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" name="email" aria-describedby="emailHelp"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    @lang('login.send-link-reset-password')
                </button>
            </form>

            <div class="d-flex justify-content-center mt-4">
                <div class="text-center">
                    <a href="{{ route('login') }}">@lang('login.already-have-an-account')</a>
                </div>
            </div>

        </div>
      </div>
    </div>

</div>
@endsection

@section('js')
<script>
    $(document).ready(function(){
        @if (Session::has('status'))
            Swal.fire({
                title: "@lang('main.excelence')",
                html: "{{ Session::get('status') }}",
                icon: 'success',
                showCancelButton: true,
                cancelButtonText: "@lang('main.close')",
                confirmButtonText: "@lang('main.got-login')",
            }).then((result) => {
                if (result.isConfirmed) {
                    document.location = "{{ route('login') }}"
                }
            })
        @endif
    })
</script>
@endsection
