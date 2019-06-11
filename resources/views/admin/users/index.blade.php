@extends('layouts.admin')
@section('content')
 
     <section class="users">
          <div class="container">
               <div class="card card-default col-lg-6 border-0 bg-light shadow-sm mx-auto">
                    @if (session()->has('flash_notification.message'))
                         <div class="alert alert-{{ session('flash_notification.level') }}">
                             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                             {!! session('flash_notification.message') !!}
                         </div>
                     @endif
                    <div class="card-heading">
                         <a href="{{ route('/') }}"><< admin</a>
                         <h3 class="text-center">Users</h3>
                         <div class="text-right">
                         <a href="{{ route('users.create') }}" class="btn btn-complete text-primary"><i class="fa fa-plus"></i> New User</a>
                         </div>
                    </div>
                    <div class="card-body">
                         <div id="tableWithDynamicRows_wrapper" class="dataTables_wrapper form-inline no-footer">
                              <div class="table-responsive overflowFixed">
                                   <table id="tableWithDynamicRows" class="table table-hover demo-table-dynamic dataTable no-footer" role="grid" aria-describedby="tableWithDynamicRows_info">
                                        <thead>
                                             <tr role="row">
                                                  <th class="col-md-3">Name</th>
                                                  <th class="col-md-4">Email</th>
                                                  <th class="col-md-2">Action</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                        <tr role="row" class="odd">
                                             <td class="v-align-middle">
                                                  <p>
                                                       {{ $user->name }}
                                                  </p>
                                             </td>
                                             <td class="v-align-middle">
                                                  <p>
                                                       {{ $user->email }}
                                                  </p>
                                             </td>
                                             <td class="v-align-middle">
                                                  <!-- Botones de accion -->
                                                  <a href="{{ route('users.show', $user->id) }}">See</a>
                                                  <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                                                  @if(Auth::user()->role_id == 1)
                                                       <a href="{{ route('users.destroy', $user->id) }}" onclick="return confirm('Seguro?')" onkeypress="return confirm('Seguro?')">Delete</a>
                                                  @endif
                                             </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                   </table>
                                   <div class="text-center">{!! $users->render() !!}</div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>
  
@endsection

  