@extends('layouts.admin')
@section('content')

<section class="height-basic">
     <div class="container" style="margin-top: 180px; margin-bottom: 180px;">
         <div class="row">
             <div>
                  <div class="panel panel-default">
                      <div class="panel-heading panel-heading-right"><h1>Autor - Editar</h1></div>
                      <div class="panel-body">
                          <form class="form-horizontal" role="form" method="POST" action="{{ route('authors.update', $author->id) }}" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <input type="hidden" name="id" value="{{ $author->id }}">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <fieldset>
                                  <legend>Datos del autor</legend>
                                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                      <label for="name" class="col-md-4 control-label">Nombre*</label>
                                      <div class="col-md-6">
                                          <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $author->name) }}" required>
                                          @if ($errors->has('name'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('name') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="image" class="col-md-4 control-label">Foto</label>
                                      <div class="col-md-6">
                                          <input id="image" type="file" accept=".png, .jpg, .jpeg" class="form-control" name="image">
                                      </div>
                                  </div>
                              </fieldset>
                              <div class="form-group text-center btn-div">
                                  <div class="col-sm-12 text-center">
                                      <button type="submit" class="btn btn-primary btn-form">Guardar</button>
                                      <a href="{{ route('authors.main') }}" class="btn btn-danger btn-form">Cancelar</a>
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