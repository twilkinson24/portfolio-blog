@extends('layouts.admin')
@section('content')

<section class="articles">
    <div class="container">
        <div class="col-sm-6 mx-auto bg-light shadow-sm border-0 card card-default">
            <div class="card-body">
                        <div class="card-heading card-heading-right"><span class="black-font">Create Article</span></div>
                           <div class="card-body">
                               <form id="form-article" class="form-horizontal" role="form" method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                                   {{ csrf_field() }}
                                   <fieldset>
                                       <legend>Article Details</legend>
                                       <div class="form-group">
                                           <label for="state_id" class="col-md-12 control-label">Status*</label>
                                           <div class="col-md-12">
                                                <select id="state_id" name="state_id" class="form-control capitalize">
                                                   @foreach ($states as $state)
                                                       <option value="{{ $state->id }}" @if($state->id == 1) selected="selected" @endif @if(Auth::user()->role_id != 1) disabled @endif>{{ $state->name }}</option>
                                                   @endforeach
                                               </select>
                                           </div>
                                       </div>
                                      
                                       <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                           <label for="title" class="col-md-12 control-label">Title*</label>
                                           <div class="col-md-12">
                                               <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required>
                                               @if ($errors->has('title'))
                                                   <span class="help-block">
                                                       <strong>{{ $errors->first('title') }}</strong>
                                                   </span>
                                               @endif
                                           </div>
                                       </div>
                                       <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                           <label for="image" class="col-md-8 control-label">Image*</label>
                                           <div class="col-md-8">
                                               <input id="image" type="file" accept=".png, .jpg, .jpeg" class="form-control" name="image" required>
                                                @if ($errors->has('image'))
                                                   <span class="help-block">
                                                       <strong>{{ $errors->first('image') }}</strong>
                                                   </span>
                                               @endif
                                           </div>
                                       </div>
                                   
                                       <div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
                                           <label for="summary" class="col-md-12 control-label">Summary*</label>
                                           <div class="col-md-12">
                                               <input id="summary" type="text" class="form-control" name="summary" value="{{ old('summary') }}" required>
                                               @if ($errors->has('summary'))
                                                   <span class="help-block">
                                                       <strong>{{ $errors->first('summary') }}</strong>
                                                   </span>
                                               @endif
                                           </div>
                                       </div>
                                       <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                           <label for="description" class="col-md-10 control-label">Description*</label>
                                           <div class="col-md-12">
                                               <textarea id="description" class="form-control" name="description" required>{{ old('description') }}</textarea>
                                               @if ($errors->has('description'))
                                                   <span class="help-block">
                                                       <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                               @endif
                                           </div>
                                       </div>
                                    
                                   </fieldset>
                                   <div class="form-group text-center btn-div">
                                       <div class="col-md-12">
                                           <button type="submit" class="btn btn-primary btn-form">Save</button>
                                           <a href="{{ route('articles.main') }}" class="btn btn-danger btn-form">Cancel</a>
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