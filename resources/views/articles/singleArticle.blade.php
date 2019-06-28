@extends('layouts.public')
@section('title', $article->title)
@section('description', $article->summary)

@php ($currentLink = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"])

@section('content')

<style type="text/css">body{background-color:#FFF}.navbar-inverse{background-color:#34495E;border-color:#34495E}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:0px
    solid transparent;border-radius:0px}.navbar-brand{float:left;height:auto;padding:10px
    10px;font-size:18px;line-height:20px}.navbar-brand>img{width:80%}.navbar-inverse .navbar-nav>li>a{color:#F39C12}.navbar-inverse .navbar-nav>li>a:hover{background-color:#009688}.btn-default{color:#333;background-color:#009688;border-color:#009688;border-radius:0px;color:#fff}#blog-section{margin-top:40px;margin-bottom:80px}.content-title{padding:5px;background-color:#fff}.content-title h3
    a{color:#34495E;text-decoration:none;transition:0.5s}.content-title h3 a:hover{color:#F39C12}.content-footer{background-color:#16A085;padding:10px;position:relative}.content-footer span
    a{color:#fff;display:inline-block;padding:6px
    5px;text-decoration:none;transition:0.5s}.content-footer span a:hover{color:#F39C12}aside{margin-top:30px;-webkit-box-shadow:1px 4px 16px 3px rgba(199,197,199,1);-moz-box-shadow:1px 4px 16px 3px rgba(199,197,199,1);box-shadow:1px 4px 16px 3px rgba(199,197,199,1)}aside .content-footer>img{width:33px;height:33px;border-radius:100%;margin-right:10px;border:2px
    solid #fff}.user-ditels{width:300px;top:-100px;height:100px;padding-bottom:99px;position:absolute;border:solid 2px #fff;background-color:#34495E;right:25px;display:none;z-index:1}@media (max-width:768px){.user-ditels{right:5px}}.user-small-img{cursor:pointer}.content-footer:hover .user-ditels{display:block}.content-footer .user-ditels .user-img{width:100px;height:100px;float:left}.user-full-ditels
    h3{color:#fff;display:block;margin:0px;padding-top:10px;padding-right:28px;text-align:right}.user-full-ditels
    p{color:#fff;display:block;margin:0px;padding-right:20px;padding-top:5px;text-align:right}.social-icon{background-color:#fff;margin-top:10px;padding-right:20px;text-align:right}.social-icon>a{font-size:20px;text-decoration:none;padding:5px}.social-icon a:nth-of-type(1){color:#4E71A8}.social-icon a:nth-of-type(2){color:#3FA1DA}.social-icon a:nth-of-type(3){color:#E3411F}.social-icon a:nth-of-type(4){color:#CA3737}.social-icon a:nth-of-type(5){color:#3A3A3A}.widget-sidebar{background-color:#fff;padding:20px;margin-top:30px}.title-widget-sidebar{font-size:14pt;border-bottom:2px solid #e5ebef;margin-bottom:15px;padding-bottom:10px;margin-top:0px}.title-widget-sidebar:after{border-bottom:2px solid #f1c40f;width:150px;display:block;position:absolute;content:'';padding-bottom:10px}.recent-post{width:100%;height:80px;list-style-type:none}.post-img
    img{width:100px;height:70px;float:left;margin-right:15px;border:5px
    solid #16A085;transition:0.5s}.recent-post
    a{text-decoration:none;color:#34495E;transition:0.5s}.post-img, .recent-post a:hover{color:#F39C12}.post-img img:hover{border:5px
    solid #F39C12}button.accordion{background-color:#16A085;color:#fff;cursor:pointer;padding:18px;width:100%;border:none;text-align:left;outline:none;font-size:15px;transition:0.4s}button.accordion.active,button.accordion:hover{background-color:#F39C12;color:#fff}button.accordion:after{content:'02B';color:#fff;font-weight:bold;float:right;margin-left:5px}button.accordion.active:after{content:"2212"}.panel{padding:0
    18px;background-color:white;max-height:0;overflow:hidden;transition:max-height 0.2s ease-out}.categories-btn{background-color:#F39C12;margin-top:30px;color:#fff;cursor:pointer;padding:18px;width:100%;border:none;text-align:left;outline:none;font-size:15px;transition:0.4s}.categories-btn:after{color:#fff;font-weight:bold;float:right;margin-left:5px}.categories-btn:hover{background-color:#16A085;color:#fff}.form-control{border-radius:0px}.btn-warning{border-radius:0px;background-color:#F39C12;margin-top:15px}.input-group-addon{border-radius:0px}.article-title{font-family:pt sans caption,Helvetica,Arial,sans-serif;font-weight:700;margin-bottom: .5rem}.article-data{font-family:libre franklin,Helvetica,Arial,sans-serif;text-transform:uppercase;font-weight:300;box-sizing:border-box}article.post
    p{margin-bottom:30px;font-size:1.8rem;line-height:2.25rem;color:black !important}article.post ul{font-size:1.8rem;}.icon-bar{position:fixed;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}.icon-bar
    a{display:block;text-align:center;padding:16px;transition:all 0.3s ease;color:white;font-size:20px}.icon-bar a:hover{background-color:#000}.facebook{background:#3B5998;color:white}.twitter{background:#55ACEE;color:white}.google{background:#dd4b39;color:white}.linkedin{background:#007bb5;color:white}.whatsapp{background:#54cc61;color:white}.youtube{background:#b00;color:white}.content{margin-left:75px;font-size:30px}@media (max-width: 1300px){.icon-bar{position:relative;bottom:0;display:inline-block;width:100%;margin-bottom:0}.icon-bar
    a{display:inline-block;text-align:center;padding:16px;transition:all 0.3s ease;color:white;font-size:20px}}</style>
    
    <div class="icon-bar">
      <a target="_blank" rel="external nofollow" href="https://www.facebook.com/sharer.php?u={{ $currentLink }}" class="facebook"><i class="fa fa-facebook"></i></a> 
      <a target="_blank" rel="external nofollow" href="https://twitter.com/share" class="twitter"><i class="fa fa-twitter"></i></a> 
      <a target="_blank" rel="external nofollow" href="http://www.linkedin.com/shareArticle?url={{ $currentLink }}" class="linkedin"><i class="fa fa-linkedin"></i></a>
      <a target="_blank" rel="external nofollow" href="whatsapp://send?text={{ $currentLink }}" class="whatsapp" style="display: none;" id="whatsappIcon" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a> 
    </div>

<section id="blog-section" >
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-8">
                <div class="row">
                    <article class="post" itemscope="" itemtype="https://schema.org/BlogPosting">
                        <header>
                            <h1 itemprop="name headline" class="article-title">{{ $article->title }}</h1>
                            <div class="author">
                                By <span itemprop="author" itemscope="" itemtype="https://schema.org/Person"><span itemprop="name">{{ $author->name }}</span></span>
                            </div>
                            <hr>
                            <div class="article-data" style="margin-bottom: 20px; color: grey;">
                                @php ($date = explode('-', explode(' ', $article->updated_at)[0]))
                                <i class="fa fa-clock-o"></i> <time style="margin-right: 5px;" date="{{ $date[2] . "-" . $date[1] . "-" . $date[0] }}" itemprop="datePublished">{{ $date[2] . "-" . $date[1] . "-" . $date[0] }}</time>
                            </div>
                        </header>

                        <div itemprop="articleBody">
                        <div class="article-image"><img src="{{ URL::asset('./image/' . $article->image) }}" alt="{{ $article->alt_image }}" width="750" class="img-responsive"></div>
                            
                            <p>{!! $article->description !!}</p>
                        </div>
                    </article>
                </div>
            </div>

            @php($categories = DB::table('categories')->orderBy('name')->get())
            @php($recentPosts = DB::table('articles')->where('state_id', 2)->orderBy('id', 'desc')->get())

            <div class="col-lg-3 widget-sidebar">   
                  <h2 class="title-widget-sidebar">Recent Posts</h2>
                    <div class="content-widget-sidebar">
                    <ul class="list-unstyled">
                    @if(!$recentPosts->isEmpty())     
                        @for ($i = 0; $i < sizeof($recentPosts) && $i < 3; $i++)
  
                            @php($symbolsArray = array("¿","?","¡","!"))
                            @php($symbols = $recentPosts[$i]->title)
                            @php($title = str_replace($symbolsArray, "", $symbols))
  
                            <li class="recent-post">
                                <a href='{{ route("articles.description", [strtolower(str_replace(" ","-", trim($title))), $recentPosts[$i]->id]) }}'><h5>{{ $recentPosts[$i]->title }}</h5></a>
                            <p>{{ $recentPosts[$i]->summary }}</p>
                                @php ($dateRecentPost = explode('-', explode(' ', $recentPosts[$i]->updated_at)[0]))
                                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> {{ $dateRecentPost[2] . "-" . $dateRecentPost[1] . "-" . $dateRecentPost[0] }}</small></p>
                              </li>
                              <hr>
                        @endfor
                    @endif
                    </ul>
                    <h2 class="title-widget-sidebar">Categories</h2>
                    <ul class="list-unstyled">
                        @if(!$recentPosts->isEmpty())     
                            @foreach ($categories as $category)
                                <li class="category">
                                    <a href='{{ route('articles.publicIndex', $category->name) }}'><h5>{{ $category->name }}</h5></a>
                                </li>
                            @endforeach
                        @endif
                    </ul>        
                    <p class="lead">Connect:</p>
                    <a href="https://twitter.com/coding4tacos/" class="text-custom-dark" target="_blank"><span class="fab fa-twitter"></span></a>  <a href="https://www.linkedin.com/in/taylor-wilkinson-a6478229/"  class="text-custom-dark" target="_blank"><span class="fab fa-linkedin-in"></span></a>
                </div>
            </div>

    </div>
</section>

@endsection




