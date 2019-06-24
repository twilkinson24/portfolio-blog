
@extends('layouts.public')
@section('content')

<section class="change-password">
        <div class="container">
            <div class="col-md-5 mx-auto bg-light shadow-sm border-0 card card-default">
                <div class="card-body">
                    <a href="{{ route('/') }}"><< admin</a>
                    <h3 class="text-center">Reset Password</h3>
                 <div class="panel panel-default">
                     @if (session()->has('flash_notification.message'))
                         <div class="alert alert-{{ session('flash_notification.level') }}">
                             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                             {!! session('flash_notification.message') !!}
                         </div>
                     @endif
                     <div class="card-body">
                         @if (session('status'))
                             <div class="alert alert-success">
                                 {{ session('status') }}
                             </div>
                         @endif
                         <form class="form-horizontal" role="form" method="POST" action="{{ route('password.postemail') }}" enctype="multipart/form-data">
                             {{ csrf_field() }}
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                             <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                 <label for="email" class="col-md-8 control-label">Email*</label>
                                 <div class="col-12">
                                     <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                     @if ($errors->has('email'))
                                         <span class="help-block">
                                             <strong>{{ $errors->first('email') }}</strong>
                                         </span>
                                     @endif
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="col-12 text-center">
                                     <button type="submit" class="btn btn-primary">
                                         Send Reset Link
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