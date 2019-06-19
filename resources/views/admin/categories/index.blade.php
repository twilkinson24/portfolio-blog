@extends('layouts.admin')
@section('content')

<section class="articles">
     <div class="container">
          <div class="col-md-6 mx-auto bg-light shadow-sm border-0 card card-default">
               <div class="card-body">
                    <a href="{{ route('/') }}"><< admin</a>
                    <h3 class="text-center">Categories</h3>
                    <div class="pull-right">
                         <a href="{{ route('categories.create') }}" class="btn btn-complete"><i class="fa fa-plus"></i> Add New</a> 
                    </div>
                    @if (session()->has('flash_notification.message'))
                    <div class="alert alert-{{ session('flash_notification.level') }}">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                         {!! session('flash_notification.message') !!}
                    </div>
                    @endif
               </div>
               <div class="card-body">
                    <div id="tableWithDynamicRows_wrapper" class="dataTables_wrapper form-inline no-footer">
                         <div class="table-responsive overflowFixed">
                              <table id="tableWithDynamicRows" class="table table-hover demo-table-dynamic dataTable no-footer" role="grid" aria-describedby="tableWithDynamicRows_info">
                                   <thead>
                                        <tr role="row">
                                             <th class="col-md-9">Name</th>
                                             <th class="col-md-3">Actions</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                   @foreach($categories as $category)
                                   <tr role="row" class="odd">
                                        <td class="v-align-middle">
                                             <p>
                                                  {{ $category->name }}
                                             </p>
                                        </td>
                                        <td class="v-align-middle">
                                        <a href="{{ route('categories.show', $category->id) }}">
                                             Show      
                                        </a> 
                                             <a href="{{ route('categories.edit', $category->id) }}">
                                                  Edit
                                             </a> 
                                             @if(Auth::user()->role_id == 1)
                                                  <a href="{{ route('categories.destroy', $category->id) }}" onclick="return confirm('Delete the category?')" onkeypress="return confirm('Delete the category?')">
                                                       Delete
                                                  </a>
                                             @endif
                                        </td>
                                   </tr>
                                   @endforeach
                                   </tbody>
                              </table>
                              <div class="text-center">{!! $categories->render() !!}</div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>



@endsection