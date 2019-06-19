@extends('layouts.admin')
@section('content')
  
  
  <!--/ header-->
  <section class="text-center">
      <h1 class="page-title">Welcome {{ Auth::user()->name }}</h1>
      <p class="lead text-secondary">Dashboard</p>
  </section>
  <section class="admin-dashboard">
    <div class="container col-8">
        <div class="dashboard-cards d-flex justify-content-center flex-column flex-sm-row flex-wrap">
            <!-- New Card -- Users -->
            <div class="card card-primary col-sm-4 p-0 m-2">
                <div class="card-heading p-2">
                    <div class="d-flex justify-content-center">
                        <div class="admin-dash-icon mx-1">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="admin-dash-info mx-1 pt-1">
                            <p class="lead m-0">{{ $userCount }}</p>
                            <p>Users</p>
                        </div>
                    </div>
                </div>
                <a href="{{ URL::asset('/admin/users') }}">
                    <div class="card-footer text-center">
                        <p class="m-0">Details</p>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
            <!-- New Card -- Articles -->
            <div class="card card-primary col-sm-4 p-0 m-2">
                <div class="card-heading p-2">
                    <div class="d-flex justify-content-center">
                        <div class="admin-dash-icon mx-2">
                            <i class="fa fa-file fa-5x"></i>
                        </div>
                        <div class="admin-dash-info mx-1 pt-1">
                            <p class="lead m-0">{{ $articleCount }}</p>
                            <p class="p-0">Blog Posts</p>
                        </div>
                    </div>
                </div>
                <a href="{{ URL::asset('/admin/articles') }}">
                    <div class="card-footer text-center">
                        <p class="m-0">Details</p>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
            <!-- New Card -- Authors -->
            <div class="card card-primary col-sm-4 p-0 m-2">
                <div class="card-heading p-2">
                    <div class="d-flex justify-content-center">
                        <div class="admin-dash-icon mx-2">
                            <i class="fa fa-file fa-5x"></i>
                        </div>
                        <div class="admin-dash-info mx-1 pt-1">
                            <p class="lead m-0">{{ $authorCount }}</p>
                            <p class="p-0">Authors</p>
                        </div>
                    </div>
                </div>
                <a href="{{ URL::asset('/admin/authors') }}">
                    <div class="card-footer text-center">
                        <p class="m-0">Details</p>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
            <!-- New Card -- Categories -->
            <div class="card card-primary col-sm-4 p-0 m-2">
                    <div class="card-heading p-2">
                        <div class="d-flex justify-content-center">
                            <div class="admin-dash-icon mx-2">
                                <i class="fa fa-file fa-5x"></i>
                            </div>
                            <div class="admin-dash-info mx-1 pt-1">
                                <p class="lead m-0">{{ $categoryCount }}</p>
                                <p class="p-0">Categories</p>
                            </div>
                        </div>
                    </div>
                    <a href="{{ URL::asset('/admin/categories') }}">
                        <div class="card-footer text-center">
                            <p class="m-0">Details</p>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
        </div>
    </div>
</section>
  

@endsection