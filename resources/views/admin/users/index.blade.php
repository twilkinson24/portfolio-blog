@extends('layouts.admin')
@section('content')
 
<section class="users">
     <div class="container">
          <div class="card card-default col-lg-8 border-0 bg-light shadow-sm mx-auto">
               <div class="card-heading">
                    <a href="{{ route('/') }}"><< admin</a>
                    <h3 class="text-center">Users</h3>
                    <div class="text-right">
                         <a href="{{ route('users.create') }}" class="btn btn-complete"><i class="fa fa-plus"></i> New User</a>
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
                                             <th class="col-md-2">Name</th>
                                             <th class="col-md-5">Email</th>
                                             <th class="col-md-5">Action</th>
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
                                             <ul class="list-group list-unstyled">
                                                  <!-- Action Buttons -->
                                                  <li><a href="{{ route('users.show', $user->id) }}">See</a></li>
                                                  <li><a href="{{ route('users.edit', $user->id) }}">Edit</a></li>
                                                  @if(Auth::user()->email == $user->email)
                                                       <li><a href="{{ route('users.editpassword', $user->id) }}">Change Password</a></li>
                                                  @endif
                                                  @if(Auth::user()->role_id == 1)
                                                       <li><a href="{{ route('users.destroy', $user->id) }}" onclick="return confirm('Delete user?')" onkeypress="return confirm('Delete User?')">Delete</a></li>
                                                  @endif
                                             </ul>
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

  