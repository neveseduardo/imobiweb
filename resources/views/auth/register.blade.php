@extends('layouts.app')

@section('content')
<div class="main row">
    <div class="wrap-g">
        
        <h1>Registre-se</h1>
        
        <form method="POST" action="{{ route('register') }}">

            {{ csrf_field() }}

            <div class="formgroup{{ $errors->has('name') ? ' has-error' : '' }}">
                <input placeholder="Nome" type="text" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>

            <div class="formgroup{{ $errors->has('email') ? ' has-error' : '' }}">

                <input placeholder="E-Mail" type="email" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="formgroup{{ $errors->has('password') ? ' has-error' : '' }}">

                <input placeholder="Senha" type="password" name="password" required>

                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>

            <div class="formgroup">
                <input placeholder="Confirmar senha" type="password" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fa fa-user"></i>REGISTRAR</button>
                <a class="btn btn-link" href="{{ route('login') }}">Login</a>
            </div>
        </form>
    </div>
</div>
@endsection
