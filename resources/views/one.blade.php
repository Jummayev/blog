@extends("layout")

@section('content')

    <!--=====================================-->
    <!--=          Post Area Start          =-->
    <!--=====================================-->
    <section class="space-top-60 space-bottom-60 single-blog-wrap1 bg-color-light-1 transition-default">
        <div class="container">
            <div class="row sticky-coloum-wrap">
                <div class="col-lg-8 sticky-coloum-item">
                    <div class="single-blog-content content-layout1 pe-lg-4">
                        <h1 class="entry-title color-dark-1">{{ $blog->title }}</h1>
                        <ul class="entry-meta color-dark-1">

                            <li>
                                <i class="regular-calendar-01"></i>{{ $blog->created_at }}
                            </li>

                            <li>
                                <i class="regular-eye"></i>{{ $blog->view_count }}k
                            </li>

                        </ul>
                        <div class="mb-4 box-border-dark-1 radius-default transition-default">
                            <div class="figure-holder img-height-100 radius-medium">
                                <img width="810" height="490" src="{{ asset("storage/{$blog->image}") }}" alt="Post">
                            </div>
                        </div>
                        <div>
                            {!! $blog->description !!}
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 sticky-coloum-item">
                    <div class="sidebar-global sidebar-layout4">
                        <div class="sidebar-widget">
                            <div class="widget-banner banner-layout1">
                                <div class="radius-default box-border-dark-1 img-height-100">
                                    {{--                                    <div class="figure-holder radius-medium">--}}
                                    {{--                                        <img width="700" height="294"--}}
                                    {{--                                             src="{{ asset("assets/media/banner/banner2.webp") }}"--}}
                                    {{--                                             alt="Banner">--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <div class="section-heading heading-style-6">
                                <h3 class="title">Short Stories</h3>
                            </div>
                            <div class="widget-post post-layout1">
                                @foreach($blogs  as $_blog)
                                    <div class="post-box">
                                        <div class="figure-holder radius-default">

                                            <a href="{{ route("blog.show", ["blog" => $_blog->id]) }}"
                                               class="link-wrap figure-overlay img-height-100">
                                                <img
                                                    width="700" height="470"
                                                    src="{{ asset("storage/{$_blog->image}") }}" alt="Post"></a>
                                        </div>
                                        <div class="content-holder">
                                            <h3 class="entry-title color-light-1-fixed h3-small underline-animation">
                                                <a
                                                    href="{{ route("blog.show", ["blog" => $_blog->id]) }}"
                                                    class="link-wrap">
                                                    {{ $_blog->title }}
                                                </a>
                                            </h3>
                                            <ul class="entry-meta color-light-1-fixed">
                                                <li>
                                                    <i class="regular-clock-circle"></i>{{ $_blog->view_count }}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=        Newsletter Area Start      =-->
    <!--=====================================-->
@stop
