@extends('layouts.app')

@section('title', 'Login')
    
@section('description', 'Ingresar al admin panel')

@section('content')


  <!--header-->
  <header class="text-light">
     <nav class="shadow py-2">
          <div class="container d-flex justify-content-between">
               <div class="menu-site-name"><h3>TW</h3></div>
                    <ul class="nav-links d-flex">
                         <li>
                              <a href="#" class="nav-link">Projects</a>
                         </li>
                         <li>
                              <a href="#" class="nav-link">About Me</a>
                         </li>
                         <li>
                              <a href="#" class="nav-link">Blog</a>
                         </li>
                         <li>
                              <a href="#" class="nav-link">Contact</a>
                         </li>
                    </ul>
               </div>
          </div>
     </nav>
</header>
<!--/ header-->
<section class="jumbotron text-center bg-white">
     <div class="container">
          <h1 class="jumbotron-heading">INDEX de USUARIOS</h1>
     </div>
</section>

<section class="height-basic">
    <div class="container" style="margin-top: 180px; margin-bottom: 180px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Ingresar</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Correo*</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Contraseña*</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <!-- Olvidaste tu contrasena? -->
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Ingresar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
