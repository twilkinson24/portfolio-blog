@extends('layouts.admin')
@section('content')

<section class="categories">
     <div class="container">
          <div class="col-sm-6 mx-auto bg-light shadow-sm border-0 card card-default">
               <div class="card-body">
                    <a href="{{ route('/') }}"><< admin</a>
                    <a href="{{ route('categories.main') }}"><< categories</a>
               </div>
               <div class="card-body">
                    <div class="col-12">
                         <h2 class="text-center" style="margin-bottom: 15px;">Category Details</h2>
                         <div class="form-group">
                              <label class="col-md-10 margin-top-20" style="font-weight: bold;">Name</label>
                              <p class="col-md-10">{{ $category->name }}</p>
                         </div>
                    </div>
                    <div class="clearfix"></div>
                    
                    <div class="form-group col-sm-12 text-center btn-div">
                         <div>
                              <a href="{{ route('categories.main') }}" class="btn btn-primary btn-form">Back</a>
                         </div>
                    </div>
               </div>
          </div>
     </div></section>
</section>

@endsection