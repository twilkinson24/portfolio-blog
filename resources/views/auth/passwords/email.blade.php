
@extends('layouts.public')
@section('content')

<section class="height-basic">
     <div class="container" style="margin-top: 180px; margin-bottom: 180px;">
         <div class="row">
             <div class="col-md-8 col-md-offset-2">
                 <div class="panel panel-default">
                     @if (session()->has('flash_notification.message'))
                         <div class="alert alert-{{ session('flash_notification.level') }}">
                             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                             {!! session('flash_notification.message') !!}
                         </div>
                     @endif
                     <div class="panel-heading">Renovar contraseña</div>
                     <div class="panel-body">
                         @if (session('status'))
                             <div class="alert alert-success">
                                 {{ session('status') }}
                             </div>
                         @endif
                         <form class="form-horizontal" role="form" method="POST" action="{{ route('password.postEmail') }}" enctype="multipart/form-data">
                             {{ csrf_field() }}
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                             <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                 <label for="email" class="col-md-4 control-label">Email*</label>
                                 <div class="col-md-6">
                                     <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                     @if ($errors->has('email'))
                                         <span class="help-block">
                                             <strong>{{ $errors->first('email') }}</strong>
                                         </span>
                                     @endif
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="col-md-6 col-md-offset-4">
                                     <button type="submit" class="btn btn-primary">
                                         Enviar link de renovación
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