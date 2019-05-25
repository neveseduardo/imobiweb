@extends('layouts.app')

@section('content')
<div class="main row">
    <div class="wrap-g">
        <form method="POST" action="{{ route('password.email') }}">

            {{ csrf_field() }}

            <div class="formgroup{{ $errors->has('email') ? ' has-error' : '' }}">

                <input placeholder="E-Mail" type="email" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="formgroup">
                <button type="submit" class="btn btn-primary">ENVIAR LINK</button>
            </div>
        </form>
    </div>
</div>
@endsection
