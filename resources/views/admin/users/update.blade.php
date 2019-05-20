@extends('layouts.admin')
@section('content')


<section class="user-info">
    <div class="container">
        <div class="col-sm-6 mx-auto bg-light shadow-sm border-0 card card-default">
            <div class="card-body">
                    <h3 class="text-center text-custom-dark">Edit User</h3>
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <fieldset>
                                <div class="form-group">
                                    <label for="role_id" class="col-md-10 mt-3 control-label">Role</label>

                                        <select id="role_id" name="role_id" class="form-control capitalize" required>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}" @if($user->role_id == $role->id) selected="selected" @endif>{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-10 mt-3 control-label">Name*</label>

                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" required>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-10 mt-3 control-label">Email*</label>

                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}" required>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </fieldset>
                            <div class="form-group text-center btn-div">
                                <div class="col-sm-12 text-center">
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