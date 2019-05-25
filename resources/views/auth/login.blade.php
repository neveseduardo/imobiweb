@extends('layouts.app')

@section('content')
<div class="main row">
    <div class="wrap-g">
        
        <h1>Login</h1>
        
        <form method="POST" action="{{ route('login') }}">

            {{ csrf_field() }}

            <div class="formgroup{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="formgroup{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" name="password" required>

                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>

            <div class="formgroup">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Manter online
                    </label>
                </div>
            </div>

            <div class="formgroup">
                <button type="submit" class="btn btn-primary"><i class="fa fa-lock"></i>ENTRAR</button>
                <a class="btn btn-link" href="{{ route('register') }}">Registrar</a>
                <a class="btn btn-link" href="{{ route('password.request') }}">Esqueceu a senha?</a>
            </div>
        </form>
    </div>
</div>
@endsection
