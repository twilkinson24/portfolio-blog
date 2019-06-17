@extends('layouts.admin')
@section('content')

<section class="authors">
    <div class="container">
        <div class="col-sm-6 mx-auto bg-light shadow-sm border-0 card card-default">
            <div class="card-body">
                <a href="{{ route('/') }}"><< admin</a>
                <a href="{{ route('authors.main') }}"><< authors</a>
                        <h3 class="text-center">Create Author</h3>
                    <div class="card-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('authors.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name*</label>
                                    <div class="col-12">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('alt_image') ? ' has-error' : '' }}">
                                    <label for="alt_image" class="col-md-6 control-label">Image Alternative Text</label>
                                    <div class="col-12">
                                        <input id="alt_image" type="text" class="form-control" name="alt_image" value="{{ old('alt_image') }}" required>
                                        @if ($errors->has('alt_image'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('alt_image') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                    <label for="image" class="col-md-4 control-label">Picture*</label>
                                    <div class="col-12">
                                        <input id="image" type="file" accept=".png, .jpg, .jpeg" class="form-control" name="image" required>
                                        @if ($errors->has('image'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            
                            </fieldset>
                            <div class="form-group text-center btn-div">
                                <div class="col-md-12 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary btn-form">Save</button>
                                    <a href="{{ route('authors.main') }}" class="btn btn-danger btn-form">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </a>
            </div>
        </div>
    </div>
                    
 </section>


@endsection