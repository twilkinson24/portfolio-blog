@extends('layouts.admin')
@section('content')

<section class="new-user">
     <div class="container">
        <div class="col-sm-6 card card-default mx-auto border-0 bg-light shadow-sm">
            <div class="card-heading text-center"><h2>New User</h2></div>
            <div class="card-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <fieldset>
                        <legend>User Info</legend>
                        <div class="form-group">
                            <label for="role_id" class="control-label">Role*</label>
                            <div class="col-md-6 p-0">
                                <select id="role_id" name="role_id" class="form-control capitalize" required>
                                    @foreach ($userRoles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Name*</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">Email*</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Password*</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="control-label">Confirm Password*</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </fieldset>
                    <div class="form-group text-center btn-div">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('users.main') }}" class="btn btn-danger btn-form">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection