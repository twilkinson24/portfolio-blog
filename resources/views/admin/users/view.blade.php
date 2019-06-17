@extends('layouts.admin')
@section('content')

<section class="user-info">
	<div class="container">
		<div class="col-sm-6 mx-auto bg-light shadow-sm border-0 card card-default">
			<div class="card-body">
					<h3 class="text-center">User Details</h3>
					<div class="form-group">
						<label class="col-md-10 mt-3"style="font-weight: bold;">Role</label>
						<p class="col-md-10">{{ $role->name }}</p>
					</div>
					<div class="form-group">
						<label class="col-md-10 mt-3" style="font-weight: bold;">Name</label>
						<p class="col-md-10">{{ $user->name }}</p>
					</div>
					<div class="form-group">
						<label class="col-md-10 mt-3" style="font-weight: bold;">email</label>
						<p class="col-md-10">{{ $user->email }}</p>
					</div>
				</div>
				<div class="clearfix"></div>

				<div class="form-group col-sm-12 text-center btn-div">
					<div>
						<a href="{{ route('users.main') }}"><button type="button" class="btn btn-primary btn-form">Back</button></a>
					</div>
				</div>
			</div>
	</div>
</section>


@endsection