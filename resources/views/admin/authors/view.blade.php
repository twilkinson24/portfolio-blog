@extends('layouts.admin')
@section('content')

<section class="height-basic">
     <div class="container" style="margin-top: 180px; margin-bottom: 180px;">
         <div class="row">
              <div>
                  <div class="panel panel-default">
                      <div class="panel-heading panel-heading-right"><h1>Autor - Ver</h1></div>
                      <div class="panel-body">
                          <div class="col-sm-8 col-sm-offset-2">
                              <h2 style="margin-bottom: 15px;">Datos del autor</h2>
                              <div class="form-group">
                                  <label class="col-md-10 margin-top-20" style="font-weight: bold;">Nombre</label>
                                  <p class="col-md-10">{{ $author->name }}</p>
                              </div>
                              <div class="form-group">
                                 <img src="/image/{{ $author->image }}" height="70" width="70">
                              </div>
                          </div>
                          <div class="clearfix"></div>
                          <br><br><br>
                          <div class="form-group col-sm-12 text-center btn-div">
                              <div>
                                  <a href="{{ route('authors.main') }}" class="btn btn-primary btn-form">Volver</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
           </div>
      </div>
 </section>

 @endsection