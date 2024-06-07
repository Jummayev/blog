@extends("layout")

@section('content')

    <!--=====================================-->
    <!--=          Hero Area Start          =-->
    <!--=====================================-->
    <section class="hero-wrap-layout1 bg-color-light-1 transition-default">
        <div class="container">
            <div class="hero-box-layout1">
                <h1 class="title h1-large">Yashil taraqqiyot.<span> Barqaror kelajak sari.</span></h1>
                <form action="{{ route("blog.search") }}" class="search-form radius-default" method="GET">
                    <input type="text" name="q" class="email-input" placeholder="Qidiruv...">
                    <button type="submit" class="axil-btn"><i class="regular-search-02"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=        Category Area Start        =-->
    <!--=====================================-->
    <section class="category-wrap-layout-2 bg-color-light-1 transition-default">
        <div class="container">
            <div class="position-relative">
                <div id="category-slider-2" class="category-slider-2 gutter-30 initially-none">
                    @foreach($banners as $banner)
                        <div class="single-slide">
                            <div class="category-box-layout2 figure-scale-animation">
                                <div class="figure-holder radius-default">
                                    <a href="{{ route("blog.show", ["blog" => $banner->id]) }}"
                                       class="link-wrap img-height-100">
                                        <img width="180" height="130" src="{{ asset("storage/{$banner->image}") }}"
                                             alt="Category">
                                    </a>
                                    <div class="entry-category style-4 color-dark-1-fixed">
                                        <ul>
                                            <li>
                                                <a href="{{ route("blog.tags", ["tag" => $banner->tag]) }}">{{ $banner->tag }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <ul class="slider-navigation-layout1 color-light-1 position-layout2">
                    <li id="category-prev2" class="prev"><i class="regular-arrow-left"></i></li>
                    <li id="category-next2" class="next"><i class="regular-arrow-right"></i></li>
                </ul>
            </div>
        </div>
    </section>


    <!--=====================================-->
    <!--=          Post Area Start          =-->
    <!--=====================================-->
    <section class="post-wrap-layout21 space-top-50 bg-color-light-1 transition-default">
        <div class="container">
            <div class="section-heading heading-style-1">
                <h2 class="title">Ommabob </h2>
                <a href="{{ route("blog.byCategory", ["type" => "top"]) }}" class="link-wrap">
                    Barchasi
                    <span class="icon-holder">
                        <i class="regular-arrow-right"></i>
                    </span>
                </a>
            </div>
            <div class="row g-3">
                @foreach($tops as $top)
                    <div class="col-lg-4">
                        <div
                            class="post-box-layout4 radius-default padding-20 bg-color-old-lace box-shadow-large shadow-style-2 box-border-dark-1 no-border transition-default">
                            <div class="figure-holder radius-default">
                                <a href="{{ route("blog.show", ["blog" => $top->id]) }}"
                                   class="link-wrap img-height-100">
                                    <img width="660" height="470" src="{{ asset("storage/{$top->image}") }}" alt="Post">
                                </a>
                            </div>
                            <div class="content-holder">
                                <div class="entry-category style-2 color-dark-1-fixed">
                                    <ul>
                                        <li>
                                            <a href="{{ route("blog.tags", ["tag" => $top->tag]) }}">{{ $top->tag  }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="entry-title color-dark-1-fixed underline-animation">
                                    <a href="{{ route("blog.show", ["blog" => $top->id]) }}" class="link-wrap">
                                        {{ $top->title }}
                                    </a>
                                </h3>
                                <ul class="entry-meta color-dark-1-fixed">

                                    <li>
                                        <i class="regular-clock-circle"></i>{{ $top->created_at }}
                                    </li>
                                    <li>
                                        <i class="regular-eye"></i>{{ $top->view_count }}k
                                    </li>
                                </ul>
                                <a href="{{ route("one") }}" class="btn-text color-dark-1-fixed">
                                    Batafsil
                                    <span class="icon-holder">
                                        <i class="regular-arrow-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--=====================================-->
    <!--=          Post Area Start          =-->
    <!--=====================================-->
    <section class="post-wrap-layout20 space-top-50 space-bottom-60 bg-color-light-1 transition-default">
        <div class="container">
            <div class="section-heading heading-style-1">
                <h2 class="title">Oxirgi maqolalar</h2>
                <a href="{{ route("blog.byCategory", ["type" => "view"]) }}" class="link-wrap">
                    Barchasi
                    <span class="icon-holder">
                        <i class="regular-arrow-right"></i>
                    </span>
                </a>
            </div>
            <div class="row g-3">
                @foreach($reads as $i => $read)
                    @if($i > 0)
                        @php
                            break;
                        @endphp
                    @endif
                    <div class="col-lg-6">
                        <div class="post-box-layout10 radius-default both-side-equal">
                            <div class="figure-holder radius-default">
                                <a href="{{ route("blog.show", ["blog" => $read->id]) }}"
                                   class="link-wrap figure-overlay img-height-100">
                                    <img
                                        width="700" height="770" src="{{ asset("storage/{$read->image}") }}"
                                        alt="Post">
                                </a>
                            </div>
                            <div class="content-holder">
                                <div class="entry-category style-2 color-dark-1-fixed">
                                    <ul>
                                        <li>
                                            <a href="{{ route("blog.tags", ["tag" => $read->tag]) }}">{{ $read->tag }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="entry-title h3-large color-light-1-fixed underline-animation">
                                    <a
                                        href="{{ route("blog.show", ["blog" => $read->id]) }}" class="link-wrap">
                                        {{ $read->title }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-lg-6">
                    <div class="row g-3">
                        @foreach($reads as $read)
                            @if($i = 0)
                                @php
                                    continue;
                                @endphp
                            @endif
                            <div class="col-md-6">
                                <div
                                    class="post-box-layout11 radius-default padding-20 bg-color-scandal box-shadow-default shadow-style-2 box-border-dark-1 no-border transition-default">
                                    <div class="figure-holder radius-default">
                                        <a href="{{ route("blog.show", ["blog" => $read->id]) }}"
                                           class="link-wrap img-height-100">
                                            <img width="480"
                                                 height="344"
                                                 src="{{ asset("storage/{$read->image}") }}"
                                                 alt="Post"></a>
                                    </div>
                                    <div class="content-holder">
                                        <div class="entry-category style-2 color-dark-1-fixed">
                                            <ul>
                                                <li>
                                                    <a href="{{ route("blog.tags", ["tag" => $read->tag]) }}">{{ $read->tag }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="entry-title h3-small color-dark-1-fixed underline-animation">
                                            <a
                                                href="{{ route("blog.show", ["blog" => $read->id]) }}"
                                                class="link-wrap">
                                                {{ $read->title }}
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--=====================================-->
    <!--=          Post Area Start          =-->
    <!--=====================================-->

    <!--=====================================-->
    <!--=          Post Area Start          =-->
    <!--=====================================-->
    <section class="post-wrap-layout20 space-top-50 bg-color-light-1 transition-default">
        <div class="container">
            <div class="section-heading heading-style-1">
                <h2 class="title">Eng mashhur</h2>
            </div>
            <div class="row g-3">
                @foreach($populars as $popular)
                    <div class="col-lg-6">
                        <div
                            class="post-box-layout22 radius-default padding-20 bg-color-scandal box-shadow-default shadow-style-2 box-border-dark-1 no-border transition-default">
                            <div class="figure-holder radius-default">
                                <a href="{{ route("blog.show", ["blog" => $popular->id]) }}"
                                   class="link-wrap img-height-100">
                                    <img width="500" height="500"
                                         src="{{ asset("storage/$popular->image") }}"
                                         alt="Post"></a>
                            </div>
                            <div class="content-holder">
                                <div>
                                    <div class="entry-category style-2 color-dark-1-fixed">
                                        <ul>
                                            <li>
                                                <a href="{{ route("blog.tags", ["tag" => $popular->tag]) }}">{{ $popular->tag }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="entry-title h3-small color-dark-1-fixed underline-animation"><a
                                            href="{{ route("blog.show", ["blog" => $popular->id]) }}" class="link-wrap">
                                            {{ $popular->title }}
                                        </a></h3>
                                    <ul class="entry-meta color-dark-1-fixed">

                                        <li>
                                            <i class="regular-clock-circle"></i>{{ $popular->view_count }}
                                        </li>
                                        <li>
                                            <i class="regular-clock-circle"></i>{{ $popular->created_at }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

@stop
