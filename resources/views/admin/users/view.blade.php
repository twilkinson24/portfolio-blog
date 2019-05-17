@extends('layouts.admin')
@section('content')

<div class="first-section flex-center margin-top-50">
	<div class="container" style="margin-top: 180px; margin-bottom: 180px;">
	    <div class="row">
	        <div>
	            <div class="panel panel-default">
	                <div class="panel-heading panel-heading-right" style="font-size: 14px; font-weight: bold;">Usuario - Ver</div>
	                <div class="panel-body">
	                    <div class="col-sm-10 col-sm-offset-1">
	                        <legend style="margin-bottom: 15px;">Datos del usuario</legend>
	                        <div class="form-group col-md-6">
	                            <label class="col-md-10" style="font-weight: bold;">Rol</label>
	                            <span class="col-md-10">{{ $role->name }}</span>
	                        </div>
	                        <div class="form-group col-md-6">
	                            <label class="col-md-10 margin-top-20" style="font-weight: bold;">Nombre</label>
	                            <p class="col-md-10">{{ $user->name }}</p>
	                        </div>
	                        <div class="form-group col-md-6">
	                            <label class="col-md-10 margin-top-20" style="font-weight: bold;">Correo</label>
	                            <p class="col-md-10">{{ $user->email }}</p>
	                        </div>
	                    </div>
	                    <div class="clearfix"></div>
	                    <br><br><br>
	                    <div class="form-group col-sm-12 text-center btn-div">
	                        <div>
	                            <a href="{{ route('users.main') }}"><button type="button" class="btn btn-primary btn-form">Volver</button></a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>

@endsection