@extends('layouts.admin')
@section('content')

<section class="authors">
     <div class="container">
          <div class="col-sm-6 mx-auto bg-light shadow-sm border-0 card card-default">
               <div class="card-heading">
                    <a href="{{ route('/') }}"><< admin</a>
                    <h3 class="text-center">Authors</h3>
                    <div class="pull-right">
                         <a href="{{ route('authors.create') }}" class="btn btn-complete"><i class="fa fa-plus"></i> Add New</a> 
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
                                             <th class="col-sm-8">Name</th>
                                             <th class="col-sm-4">Actions</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                   @foreach($authors as $author)
                                   <tr role="row" class="odd">
                                        <td>
                                             <p>
                                                  {{ $author->name }}
                                             </p>
                                        </td>
                                        <td>
                                        <ul class="list-group list-unstyled">
                                             <li><a href="{{ route('authors.show', $author->id) }}">See</a> </li>
                                             <li><a href="{{ route('authors.edit', $author->id) }}">Edit</a></li>   
                                             @if(Auth::user()->role_id == 1)
                                                  <li><a href="{{ route('authors.destroy', $author->id) }}" onclick="return confirm('¿Desea eliminar el autor?')" onkeypress="return confirm('¿Desea eliminar el autor?')">
                                                  Delete
                                                  </a></li>
                                             @endif
                                        </td>
                                   </tr>
                                   @endforeach
                                   </tbody>
                              </table>
                              <div class="text-center">{!! $authors->render() !!}</div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
 </section>


@endsection