@extends('layouts.admin')
@section('content')

<section class="height-basic">
     <div class="container" style="margin-top: 180px; margin-bottom: 180px;">
          <div class="row">
               <div>
                    <div class="panel panel-default">
                         <div class="panel-heading panel-heading-right"><span class="black-font">Crear Categoría</span></div>
                         <div class="panel-body">
                              <form class="form-horizontal" role="form" method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <fieldset>
                                   <legend>Datos de la Categoría</legend>
                                   <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Name*</label>
                                        <div class="col-md-6">
                                             <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                                             @if ($errors->has('name'))
                                                  <span class="help-block">
                                                  <strong>{{ $errors->first('name') }}</strong>
                                                  </span>
                                             @endif
                                        </div>
                                   </div>
                              </fieldset>
                              <div class="form-group text-center btn-div">
                                   <div class="col-md-6 col-md-offset-4">
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