@extends('layouts.admin')
@section('content')
<section class="height-basic">
     <div class="container" style="margin-top: 180px; margin-bottom: 180px;">
         <div class="row">
             <div>
                  <div class="panel panel-default">
                      <div class="panel-heading panel-heading-right"><h1>Crear Usuario</h1></div>
                      <div class="panel-body">
                          <form class="form-horizontal" role="form" method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <fieldset>
                                  <legend>Datos del Usuario</legend>
                                  <div class="form-group">
                                      <label for="role_id" class="col-md-4 control-label">Rol*</label>
                                      <div class="col-md-6">
                                           <select id="role_id" name="role_id" class="form-control capitalize" required>
                                              @foreach ($userRoles as $role)
                                                  <option value="{{ $role->id }}">{{ $role->name }}</option>
                                              @endforeach
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                      <label for="name" class="col-md-4 control-label">Nombre*</label>
                                      <div class="col-md-6">
                                          <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                                          @if ($errors->has('name'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('name') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>
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
                                      </div>
                                  </div>
                                  <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                      <label for="password-confirm" class="col-md-4 control-label">Confirmar contraseña*</label>
                                      <div class="col-md-6">
                                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                          @if ($errors->has('password_confirmation'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>
                              </fieldset>
                              <div class="form-group text-center btn-div">
                                  <div class="col-md-6 col-md-offset-4">
                                      <button type="submit" class="btn btn-primary btn-form">Guardar</button>
                                      <a href="{{ route('users.main') }}" class="btn btn-danger btn-form">Cancelar</a>
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