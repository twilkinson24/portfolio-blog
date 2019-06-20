@extends('layouts.public')
@section('title', 'Blog')
@section('description', 'Blog page for Taylor Wilkinson, web developer')
@section('content')

<section id="blog-section bg-white" >
  <div class="container">
    <h1 class="text-center">Recent Posts</h1>
    <p class="lead text-center">A collection of my thoughts on web development</p>
    <div>
      <div class="widget-sidebar">
        <h2 class="title-widget-sidebar">Categorías</h2>

        @php ($categories = DB::table('categories')->orderBy('name')->get())
        @foreach ($categories as $category)
            <a href="{{ route('articles.publicIndex', $category->name) }}">{{ $category->name }}</a>
        @endforeach
         
     </div> 
    </div>
    <div class="row">
      <div class="col-9 mx-auto">
            <div class="row">
            @if(!$articles->isEmpty())     
                @for ($i = 0; $i < sizeof($articles); $i++)

                  @php($symbolsArray = array("¿","?","¡","!"))
                  @php($symbols = $articles[$i]->title)
                  @php($title = str_replace($symbolsArray, "", $symbols))

                  <div class="col-lg-6">
                      <aside>
                        <a href='{{ route("articles.description", [strtolower(str_replace(" ","-", trim($title))), $articles[$i]->id]) }}'>
                        <img src="{{ URL::asset('./image/' . $articles[$i]->image) }}" alt="{{ $articles[$i]->alt_image }}" class="img-responsive">
                        </a>
                        <div class="content-title">
                          <h3><a href='{{ route("articles.description", [strtolower(str_replace(" ","-", trim($title))), $articles[$i]->id]) }}'>{{ $articles[$i]->title }}</a></h3>
                        </div>
                        <div class="content-footer">

                            <span class="pull-right">
                                @php ($date = explode('-', explode(' ', $articles[$i]->updated_at)[0]))
                                <span style="font-size: 13px;color: #fff; float: left; margin-top: 22px;">{{ $date[2] . "-" . $date[1] . "-" . $date[0] }}</span>
                            </span>
                        </div>
                      </aside>
                    </div>
              
                @endfor
            @endif

            </div>
          </div>
      </div>
    </div>
</section>


@endsection

