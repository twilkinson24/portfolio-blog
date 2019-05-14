@extends('layouts.admin')
@section('content')
  
  
  <!--/ header-->
  <section class="jumbotron text-center bg-white">
    <div class="container">
      <h1 class="jumbotron-heading">DASHBOARD</h1>
    </div>
  </section>
  <section class="height-basic">
    <div class="container" style="margin-top: 180px; margin-bottom: 180px;">
      <div class="col-sm-10 col-sm-offset-1">
              <div class="row">
                  <div class="contact_contant">
                      <div class="col-sm-10">
                          
                          <div class="first-section flex-center">
                              <div class="col-md-5 col-md-offset-1">
                        
                                          <div class="row">
                              
                                              <div class="card-module cards">
                                                  <div class="panel panel-primary">
                                                      <div class="panel-heading">
                                                          <div class="row">
                                                              <div class="col-xs-3">
                                                                  <i class="fa fa-users fa-5x"></i>
                                                              </div>
                                                              <div class="col-xs-9 text-right">
                                                                  <div class="huge">{{ $userCount }}</div>
                                                                  <div>Usuarios</div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <a href="{{ URL::asset('/admin/users') }}">
                                                          <div class="panel-footer">
                                                              <span class="pull-left">Ver detalles</span>
                                                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                              <div class="clearfix"></div>
                                                          </div>
                                                      </a>
                                                  </div>
                                              </div>

                                  
                                               <div class="card-module cards">
                                                  <div class="panel panel-primary">
                                                      <div class="panel-heading">
                                                          <div class="row">
                                                              <div class="col-xs-3">
                                                                  <i class="fa fa-file fa-5x"></i>
                                                              </div>
                                                              <div class="col-xs-9 text-right">
                                                                  <div class="huge">{{ $articleCount }}</div>
                                                                  <div>Artículos</div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <a href="{{ URL::asset('/admin/articles') }}">
                                                          <div class="panel-footer">
                                                              <span class="pull-left">Ver detalles</span>
                                                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                              <div class="clearfix"></div>
                                                          </div>
                                                      </a>
                                                  </div>
                                              </div>

                                          </div>
                                   </div>
                              </div>

                      </div>
                  </div>
              </div>
          </div>
  </div>
</section>
  

@endsection