@extends('layouts.admin')
@section('content')
 
<section class="articles">
     <div class="container">
         <div class="col-sm-6 mx-auto bg-light shadow-sm border-0 card card-default">
             <div class="card-body">
                          <span class="black-font">Articles</span>
                          <div class="pull-right">
                              <a href="{{ route('articles.create') }}" class="btn btn-complete"><i class="fa fa-plus"></i> Agregar</a> 
                          </div>
                     </div>
                          <div class="card-body">
                               <div id="tableWithDynamicRows_wrapper" class="dataTables_wrapper form-inline no-footer">
                                    <div class="table-responsive overflowFixed">
                                         <table id="tableWithDynamicRows" class="table table-hover demo-table-dynamic dataTable no-footer" role="grid" aria-describedby="tableWithDynamicRows_info">
                                              <thead>
                                                   <tr role="row">
                                                        <th class="col-md-3">Title</th>
                                                        <th class="col-md-3">Summary</th>
                                                        <th class="col-md-2">Date</th>
                                                        <th class="col-md-2">Status</th>
                                                        <th class="col-md-2">Actions</th>
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
                                                             {{ $article->summary }}
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
                                                       <!--

                                                        <a href="{{ route('articles.show', $article->id) }}"><button class="btn btn-complete"><i class="fa fa-eye"></i></button></a> 
                                                        <a href="{{ route('articles.edit', $article->id) }}">
                                                             <button class="btn btn-complete"><i class="fa fa-edit"></i></button>
                                                        </a> 
                                                        @if(Auth::user()->role_id == 1)
                                                             <a href="{{ route('articles.destroy', $article->id) }}" onclick="return confirm('Delete the article?')" onkeypress="return confirm('Delete the article?')">
                                                                  <button class="btn btn-complete">
                                                                       <i class="fa fa-remove"></i>
                                                                  </button>
                                                             </a>
                                                        @endif

                                                           
                                                   </td>
                                                    -->
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