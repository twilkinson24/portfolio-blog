@extends('layouts.admin')
@section('content')

<section class="height-basic">
     <div class="container" style="margin-top: 180px; margin-bottom: 180px;">
         <div class="row">
             <div class="panel panel-default">

                <div class="panel-heading">
                     <span class="black-font">Authors</span>
                     <div class="pull-right">
                          <a href="{{ route('authors.create') }}" class="btn btn-complete"><i class="fa fa-plus"></i> Agregar</a>
                     </div>
                </div>
                     <div class="panel-body">
                          <div id="tableWithDynamicRows_wrapper" class="dataTables_wrapper form-inline no-footer">
                               <div class="table-responsive overflowFixed">
                                    <table id="tableWithDynamicRows" class="table table-hover demo-table-dynamic dataTable no-footer" role="grid" aria-describedby="tableWithDynamicRows_info">
                                         <thead>
                                              <tr role="row">
                                                   <th class="col-sm-8">Nombre</th>
                                                   <th class="col-sm-4">Acciones</th>
                                              </tr>
                                         </thead>
                                         <tbody>
                                         @foreach($authors as $author)
                                         <tr role="row" class="odd">
                                              <td >
                                                   <p>
                                                        {{ $author->name }}
                                                   </p>
                                              </td>
                                              <td class="v-align-middle ">
                                                   <a href="{{ route('authors.show', $author->id) }}">See</a> 
                                                   <a href="{{ route('authors.edit', $author->id) }}">
                                                        Edit
                                                   </a> 
                                                   @if(Auth::user()->role_id == 1)
                                                        <a href="{{ route('authors.destroy', $author->id) }}" onclick="return confirm('¿Desea eliminar el autor?')" onkeypress="return confirm('¿Desea eliminar el autor?')">
                                                            Delete
                                                        </a>
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
      </div>
 </section>


@endsection