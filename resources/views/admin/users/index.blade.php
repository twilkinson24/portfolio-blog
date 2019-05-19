@extends('layouts.admin')
@section('content')
 
     <section class="users">
          <div class="container">
               <div class="card card-default col-sm-6 border-0 bg-light shadow-sm mx-auto">
                    <div class="card-heading">
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

  