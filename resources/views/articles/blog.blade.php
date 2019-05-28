@extends('layouts.public')
@section('content')
    
<style type="text/css">body{background-color:#ECF0F1}.navbar-inverse{background-color:#34495E;border-color:#34495E}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:0px
  solid transparent;border-radius:0px}.navbar-brand{float:left;height:auto;padding:10px
  10px;font-size:18px;line-height:20px}.navbar-brand>img{width:80%}.navbar-inverse .navbar-nav>li>a{color:#F39C12}.navbar-inverse .navbar-nav>li>a:hover{background-color:#009688}.btn-default{color:#333;background-color:#009688;border-color:#009688;border-radius:0px;color:#fff}#blog-section{margin-top:40px;margin-bottom:80px}.content-title{padding:5px;background-color:#fff}.content-title h3
  a{color:#34495E;text-decoration:none;transition:0.5s}.content-title h3 a:hover{color:#F39C12}.content-footer{background-color:#16A085;padding:10px;position:relative}.content-footer span
  a{color:#fff;display:inline-block;padding:6px
  5px;text-decoration:none;transition:0.5s}.content-footer span a:hover{color:#F39C12}aside{margin-top:30px;-webkit-box-shadow:1px 4px 16px 3px rgba(199,197,199,1);-moz-box-shadow:1px 4px 16px 3px rgba(199,197,199,1);box-shadow:1px 4px 16px 3px rgba(199,197,199,1)}aside .content-footer>img{width:33px;height:33px;border-radius:100%;margin-right:10px;border:2px
  solid #fff}.user-ditels{width:300px;top:-100px;height:100px;padding-bottom:99px;position:absolute;border:solid 2px #fff;background-color:#34495E;right:25px;display:none;z-index:1}@media (max-width:768px){.user-ditels{right:5px}}.content-footer:hover .user-ditels{display:block}.content-footer .user-ditels .user-img{width:100px;height:100px;float:left}.user-full-ditels
  h3{color:#fff;display:block;margin:0px;padding-top:10px;padding-right:28px;text-align:right}.user-full-ditels
  p{color:#fff;display:block;margin:0px;padding-right:20px;padding-top:5px;text-align:right}.social-icon{background-color:#fff;margin-top:10px;padding-right:20px;text-align:right}.social-icon>a{font-size:20px;text-decoration:none;padding:5px}.social-icon a:nth-of-type(1){color:#4E71A8}.social-icon a:nth-of-type(2){color:#3FA1DA}.social-icon a:nth-of-type(3){color:#E3411F}.social-icon a:nth-of-type(4){color:#CA3737}.social-icon a:nth-of-type(5){color:#3A3A3A}.widget-sidebar{background-color:#fff;padding:20px;margin-top:30px}.title-widget-sidebar{font-size:14pt;border-bottom:2px solid #e5ebef;margin-bottom:15px;padding-bottom:10px;margin-top:0px}.title-widget-sidebar:after{border-bottom:2px solid #f1c40f;width:150px;display:block;position:absolute;content:'';padding-bottom:10px}.recent-post{width:100%;height:80px;list-style-type:none}.post-img
  img{width:100px;height:70px;float:left;margin-right:15px;border:5px
  solid #16A085;transition:0.5s}.recent-post
  a{text-decoration:none;color:#34495E;transition:0.5s}.post-img, .recent-post a:hover{color:#F39C12}.post-img img:hover{border:5px
  solid #F39C12}button.accordion{background-color:#16A085;color:#fff;cursor:pointer;padding:18px;width:100%;border:none;text-align:left;outline:none;font-size:15px;transition:0.4s}button.accordion.active,button.accordion:hover{background-color:#F39C12;color:#fff}button.accordion:after{content:'02B';color:#fff;font-weight:bold;float:right;margin-left:5px}button.accordion.active:after{content:"2212"}.panel{padding:0
  18px;background-color:white;max-height:0;overflow:hidden;transition:max-height 0.2s ease-out}.categories-btn{background-color:#F39C12;margin-top:30px;color:#fff;cursor:pointer;padding:18px;width:100%;border:none;text-align:left;outline:none;font-size:15px;transition:0.4s}.categories-btn:after{color:#fff;font-weight:bold;float:right;margin-left:5px}.categories-btn:hover{background-color:#16A085;color:#fff}.form-control{border-radius:0px}.btn-warning{border-radius:0px;background-color:#F39C12;margin-top:15px}.input-group-addon{border-radius:0px}</style>
  
  <section id="blog-section" >
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
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
                              <div>
                                  <h3 style="font-weight: bold;"><a href='{{ route("articles.description", [strtolower(str_replace(" ","-", trim($title))), $articles[$i]->id]) }}'>{{ $articles[$i]->title }}</a></h3>
                              </div>
                          </div>
                          <div class="content-footer">



                              @php($author = DB::table('authors')->where('id', $articles[$i]->author_id)->get())
                              <img src="{{ URL::asset('./images/' . $author[0]->image) }}" alt="{{ $author[0]->alt_image }}">
                              <span style="font-size: 16px;color: #fff;">{{ $author[0]->name }}</span>



                              
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

          <div class="col-lg-4">           
              <div class="widget-sidebar">
                <h2 class="title-widget-sidebar">Artículos recientes</h2>
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
                                        <img src="{{ URL::asset('./images/' . $recentPosts[$i]->image) }}" alt="$recentPosts[$i]->alt_image" class="img-responsive">
                                  </a>
                              </div>
                              <a href='{{ route("articles.description", [strtolower(str_replace(" ","-", trim($title))), $recentPosts[$i]->id]) }}'><h5>{{ $recentPosts[$i]->title }}</h5></a>
                              @php ($dateRecentPost = explode('-', explode(' ', $recentPosts[$i]->updated_at)[0]))
                              <p><small style="font-size: 14px;"><i class="fa fa-calendar" data-original-title="" title=""></i> {{ $dateRecentPost[2] . "-" . $dateRecentPost[1] . "-" . $dateRecentPost[0] }}</small></p>
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