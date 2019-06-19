@extends('layouts.admin')
@section('content')

<section class="height-basic">
     <div class="container" style="margin-top: 180px; margin-bottom: 180px;">
          <div class="row">
               <div>
                    <div class="panel panel-default">
                         <div class="panel-heading panel-heading-right"><h1>Categoría - Editar</h1></div>
                         <div class="panel-body">
                              <form class="form-horizontal" role="form" method="POST" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <input type="hidden" name="id" value="{{ $category->id }}">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <fieldset>
                                   <legend>Datos de la Categoría</legend>
                                   <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Nombre*</label>
                                        <div class="col-md-6">
                                             <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $category->name) }}" required>
                                             @if ($errors->has('name'))
                                                  <span class="help-block">
                                                  <strong>{{ $errors->first('name') }}</strong>
                                                  </span>
                                             @endif
                                        </div>
                                   </div>
                              </fieldset>
                              <div class="form-group text-center btn-div">
                                   <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-form">Guardar</button>
                                        <a href="{{ route('categories.main') }}" class="btn btn-danger btn-form">Cancelar</a>
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