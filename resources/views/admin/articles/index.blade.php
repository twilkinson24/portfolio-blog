@extends('layouts.admin')
@section('content')
 
<section class="height-basic">
          <div class="container" style="margin-top: 180px; margin-bottom: 180px;">
              <div class="row">
                  <div class="panel panel-default">
     
                     <div class="panel-heading">
                          <span class="black-font">Artículos</span>
                          <div class="pull-right">
                               <!-- <a href="{{ route('articles.create') }}" class="btn btn-complete"><i class="fa fa-plus"></i> Agregar</a> -->
                          </div>
                     </div>
                          <div class="panel-body">
                               <div id="tableWithDynamicRows_wrapper" class="dataTables_wrapper form-inline no-footer">
                                    <div class="table-responsive overflowFixed">
                                         <table id="tableWithDynamicRows" class="table table-hover demo-table-dynamic dataTable no-footer" role="grid" aria-describedby="tableWithDynamicRows_info">
                                              <thead>
                                                   <tr role="row">
                                                        <th class="col-md-3">Título</th>
                                                        <th class="col-md-3">Resumen</th>
                                                        <th class="col-md-2">Fecha</th>
                                                        <th class="col-md-2">Estatus</th>
                                                        <th class="col-md-2">Acciones</th>
                                                   </tr>
                                              </thead>
                                              <tbody>
                                              @foreach($articles as $article)
                                              <tr role="row" class="odd">
                                                   <td class="v-align-middle">
                                                        <p>
                                                             {{ $article->title }}
                                                        </p>
                                                   </td>
                                                   <td class="v-align-middle">
                                                        <p>
                                                             {{ $article->resume }}
                                                        </p>
                                                   </td>
                                                   <td class="v-align-middle">
                                                        <p>
                                                             @php ($date = explode('-', explode(' ', $article->updated_at)[0]))
                                                             {{ $date[2] . "-" . $date[1] . "-" . $date[0] }}
                                                        </p>
                                                   </td>
                                                   <td class="v-align-middle">
                                                        <p>
                                                             @php ($state = DB::table('states')->where('id', $article->state_id)->get())
                                                             {{ $state[0]->name }}
                                                        </p>
                                                   </td>
                                                   <td class="v-align-middle buttons-table">
                                                        <a href="{{ route('articles.show', $article->id) }}"><button class="btn btn-complete"><i class="fa fa-eye"></i></button></a> 
                                                        <a href="{{ route('articles.edit', $article->id) }}">
                                                             <button class="btn btn-complete"><i class="fa fa-edit"></i></button>
                                                        </a> 
                                                        @if(Auth::user()->role_id == 1)
                                                             <a href="{{ route('articles.destroy', $article->id) }}" onclick="return confirm('¿Desea eliminar el artículo?')" onkeypress="return confirm('¿Desea eliminar el artículo?')">
                                                                  <button class="btn btn-complete">
                                                                       <i class="fa fa-remove"></i>
                                                                  </button>
                                                             </a>
                                                        @endif
                                                   </td>
                                              </tr>
                                              @endforeach
                                              </tbody>
                                         </table>
                                         <div class="text-center">{!! $articles->render() !!}</div>
                                    </div>
                               </div>
                          </div>
                     </div>
                </div>
           </div>
      </section>


@endsection