@extends('layouts.admin')
@section('content')

<section class="articles">
    <div class="container">
        <div class="col-11 mx-auto bg-light shadow-sm border-0 card card-default">
            <div class="card-body">
                <a href="{{ route('/') }}"><< admin</a>
                <a href="{{ route('articles.main') }}"><< articles</a>
                    <h2 class="text-center" style="margin-bottom: 15px;">Edit Post</h2>
                    <form id="form-article" class="form-horizontal" role="form" method="POST" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $article->id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <fieldset>
                            <legend>Datos del Artículo</legend>
                            @if(Auth::user()->role_id == 1)
                            <div class="form-group">
                                <label for="state_id" class="col-md-4 control-label">Estado*</label>
                                <div class="col-md-6">
                                    <select id="state_id" name="state_id" class="form-control capitalize">
                                        @foreach ($states as $state)
                                            <option value="{{ $state->id }}" @if($article->state_id == $state->id) selected="selected" @endif>{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @endif

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Título*</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title', $article->title) }}" required>
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image" class="col-md-4 control-label">Foto</label>
                                <div class="col-md-6">
                                    <input id="image" type="file" accept=".png, .jpg, .jpeg" class="form-control" name="image">
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
                                <label for="summary" class="col-md-4 control-label">Summary*</label>
                                <div class="col-md-6">
                                    <input id="summary" type="text" class="form-control" name="summary" value="{{ old('summary', $article->summary) }}" required>
                                    @if ($errors->has('summary'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('summary') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} col-md-12">
                                <label for="description" class="col-md-4 control-label">Descripción*</label>
                                <textarea id="description" class="form-control" name="description" required>{{ old('description' , $article->description) }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </fieldset>
                        <div class="form-group text-center btn-div">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary btn-form">Guardar</button>
                                <a href="{{ route('articles.main') }}" class="btn btn-danger btn-form">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


      @endsection