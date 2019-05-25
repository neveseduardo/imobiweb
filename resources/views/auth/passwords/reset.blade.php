@extends('layouts.app')

@section('content')
<div class="main row">
    <div class="wrap-g">
        <form method="POST" action="{{ route('password.request') }}">

            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="formgroup{{ $errors->has('email') ? ' has-error' : '' }}">
                <input placeholder="E-Mail" type="email" name="email" value="{{ $email or old('email') }}" required autofocus>

                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="formgroup{{ $errors->has('password') ? ' has-error' : '' }}">
                <input placeholder="Nova senha" type="password" name="password" required>

                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>

            <div class="formgroup{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input placeholder="Confirmar senha" type="password" name="password_confirmation" required>

                @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
                @endif
            </div>

            <div class="formgroup">
                <button type="submit" class="btn btn-primary">RESETAR SENHA</button>
            </div>
        </form>
    </div>
</div>
@endsection
