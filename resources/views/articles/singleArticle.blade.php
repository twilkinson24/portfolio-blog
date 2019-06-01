@extends('layouts.public')
@section('content')

<section id="blog-section" >
    <div class="container">
        <div class="row">
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
                            <div class="article-image"><img src="{{ URL::asset('./image/' . $article->image) }}" alt="Article image" width="750" class="img-responsive"></div>
                            
                            <p>{!! $article->description !!}</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection




