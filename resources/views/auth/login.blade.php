@extends('layouts.public')
@section('title', 'Login') 
@section('description', 'Ingresar al admin panel')
@section('content')

<section class="text-center">
    <h1>Log In</h1>
</section>

<section class="container">
    <div class="admin-login mx-auto">
        <div class="card card-default">
            <div class="card-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">Email*</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label">Password*</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <!-- Olvidaste tu contrasena? -->
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                                Log In
                            </button>
                        </div>
                    </div>
                </form>
                <div class="text-center">
                    <a href="{{ route('password.getemail') }}">Forgot password?</a>
                </div>
            </div>
        </div>  
    </div>
</section>

@endsection
