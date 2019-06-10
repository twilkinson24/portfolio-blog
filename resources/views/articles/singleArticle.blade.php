@extends('layouts.public')
@section('content')

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
                                <div class="post-img">
                                    <a href='{{ route("articles.description", [strtolower(str_replace(" ","-", trim($title))), $recentPosts[$i]->id]) }}'>
                                        <!--
                                          <img src="{{ URL::asset('./image/' . $recentPosts[$i]->image) }}" alt="{{$recentPosts[$i]->image}}" class="img-responsive">

                                        -->
                                    </a>
                                </div>
                                <a href='{{ route("articles.description", [strtolower(str_replace(" ","-", trim($title))), $recentPosts[$i]->id]) }}'><h5>{{ $recentPosts[$i]->title }}</h5></a>
                            <p>{{ $recentPosts[$i]->summary }}</p>
                                @php ($dateRecentPost = explode('-', explode(' ', $recentPosts[$i]->updated_at)[0]))
                                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> {{ $dateRecentPost[2] . "-" . $dateRecentPost[1] . "-" . $dateRecentPost[0] }}</small></p>
                              </li>
                              <hr>
                        @endfor
                    @endif
                    </ul>
                    <p class="lead">Connect:</p>
                    <a href="https://twitter.com/coding4tacos/" class="text-custom-dark" target="_blank"><span class="fab fa-twitter"></span></a>  <a href="https://www.linkedin.com/in/taylor-wilkinson-a6478229/"  class="text-custom-dark" target="_blank"><span class="fab fa-linkedin-in"></span></a>
                </div>
            </div>

    </div>
</section>

@endsection




