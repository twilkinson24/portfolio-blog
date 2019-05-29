@extends('layouts.public')
@section('content')
    
 
  <section id="blog-section bg-white" >
    <div class="container">
      <div class="row">
        <div class="col-lg-8 border border-primary">
              <div class="row">

              @if(!$articles->isEmpty())     
                  @for ($i = 0; $i < sizeof($articles); $i++)

                    @php($symbolsArray = array("¿","?","¡","!"))
                    @php($symbols = $articles[$i]->title)
                    @php($title = str_replace($symbolsArray, "", $symbols))

                    <div class="col-lg-6 col-md-6">
                        <aside>
                          <a href='{{ route("articles.description", [strtolower(str_replace(" ","-", trim($title))), $articles[$i]->id]) }}'>
                                <img src="{{ URL::asset('./image/' . $articles[$i]->image) }}" alt="article image" class="img-responsive">
                          </a>
                          <div class="content-title">
                            <h3><a href='{{ route("articles.description", [strtolower(str_replace(" ","-", trim($title))), $articles[$i]->id]) }}'>{{ $articles[$i]->title }}</a></h3>
                          </div>
                          <div class="content-footer">
  
                              <span class="pull-right">
                                  @php ($date = explode('-', explode(' ', $articles[$i]->updated_at)[0]))
                                  <span style="font-size: 13px;color: #fff; float: left; margin-top: 22px;">{{ $date[2] . "-" . $date[1] . "-" . $date[0] }}</span>
                                  <!-- <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                                  <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>     -->              
                              </span>
                          </div>
                        </aside>
                      </div>
                
                  @endfor
              @endif

              </div>
          </div>

          @php($recentPosts = DB::table('articles')->where('state_id', 2)->orderBy('id', 'desc')->get())

          <div class="col-lg-4 border">           
              <div class="widget-sidebar border border-danger">
                <h2 class="title-widget-sidebar">Recent Posts</h2>
                  <div class="content-widget-sidebar">
                  <ul>

                  @if(!$recentPosts->isEmpty())     
                      @for ($i = 0; $i < sizeof($recentPosts) && $i < 3; $i++)

                          @php($symbolsArray = array("¿","?","¡","!"))
                          @php($symbols = $recentPosts[$i]->title)
                          @php($title = str_replace($symbolsArray, "", $symbols))

                          <li class="recent-post">
                              <div class="post-img">
                                  <a href='{{ route("articles.description", [strtolower(str_replace(" ","-", trim($title))), $recentPosts[$i]->id]) }}'>
                                        <img src="{{ URL::asset('./images/' . $recentPosts[$i]->image) }}" alt="{{$recentPosts[$i]->image}}" class="img-responsive">
                                  </a>
                              </div>
                              <a href='{{ route("articles.description", [strtolower(str_replace(" ","-", trim($title))), $recentPosts[$i]->id]) }}'><h5>{{ $recentPosts[$i]->title }}</h5></a>
                              @php ($dateRecentPost = explode('-', explode(' ', $recentPosts[$i]->updated_at)[0]))
                              <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> {{ $dateRecentPost[2] . "-" . $dateRecentPost[1] . "-" . $dateRecentPost[0] }}</small></p>
                            </li>
                            <hr>

                      @endfor
                  @endif

                  </ul>
                  </div>
                </div>
            
                <div class="widget-sidebar">
                  
              <!-- saved in tarea -->
                    
                </div>  
            
            </div>
          </div>
        </div>
    
  </section>


@endsection

