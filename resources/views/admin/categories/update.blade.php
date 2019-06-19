@extends('layouts.admin')
@section('content')

<section class="categories">
     <div class="container">
          <div class="col-sm-6 mx-auto bg-light shadow-sm border-0 card card-default">
               <div class="card-body">
                    <a href="{{ route('/') }}"><< admin</a>
                    <a href="{{ route('categories.main') }}"><< categories</a>
                    <h3 class="text-center">Edit Category</h3>
               </div>
               <div class="card-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $category->id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label for="name" class="col-md-4 control-label">Name*</label>
                              <div class="col-md-10">
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
                              <button type="submit" class="btn btn-primary btn-form">Save</button>
                              <a href="{{ route('categories.main') }}" class="btn btn-danger btn-form">Cancel</a>
                         </div>
                    </div>
                    </form>
               </div>
               </div>
          </div>
     </div>
</section>

     @endsection