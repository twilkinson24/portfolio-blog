@extends('layouts.admin')
@section('content')
 
       <section class="height-basic">
           <div class="container" style="margin-top: 180px; margin-bottom: 180px;">
               <div class="row">
                   <div class="panel panel-default">
                    
                    
                      <div class="panel-heading">
                           <span class="black-font">Usuarios</span>
                           <div class="pull-right">
                              <!-- CREATE USER -->
                           </div>
                      </div>
                           <div class="panel-body">
                                <div id="tableWithDynamicRows_wrapper" class="dataTables_wrapper form-inline no-footer">
                                     <div class="table-responsive overflowFixed">
                                          <table id="tableWithDynamicRows" class="table table-hover demo-table-dynamic dataTable no-footer" role="grid" aria-describedby="tableWithDynamicRows_info">
                                               <thead>
                                                    <tr role="row">
                                                         <th class="col-md-3">Nombre</th>
                                                         <th class="col-md-4">Correo</th>
                                                         <th class="col-md-2">Acciones</th>
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
            </div>
       </section>
  
@endsection

  