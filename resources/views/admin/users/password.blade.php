@extends('layouts.admin')
@section('content')

<section class="change-password">
    <div class="container">
        <div class="col-md-5 mx-auto bg-light shadow-sm border-0 card card-default">
            <div class="card-body">
                <a href="{{ route('/') }}"><< admin</a>
                <h3 class="text-center">Change Password</h3>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('users.updatepassword', $user->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-8 control-label">Current Password*</label>
                                <div class="col-12">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }}">
                                <label for="new-password" class="col-md-8 control-label">New Password*</label>
                                <div class="col-12">
                                    <input id="new-password" type="password" class="form-control" name="new_password" required>
                                    @if ($errors->has('new_password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('new_password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-md-8 control-label">Confirm New Password*</label>
                                <div class="col-12">
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
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-form">Save</button>
                                <a href="{{ route('users.main') }}" class="btn btn-danger btn-form">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection