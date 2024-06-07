@extends("layout")

@section('content')

    <!--=====================================-->
    <!--=          Contact Area Start       =-->
    <!--=====================================-->
    <section class="archive-wrap-layout-1 space-top-60 bg-color-light-1 transition-default">
        <div class="container">
            <div class="row g-3 justify-content-center">
                <div class="col-xl-8 col-lg-9 col-sm-10 col-12">
                    @foreach($blogs as $blog)
                        <div class="post-box-layout19 figure-scale-animation">
                            <ul class="entry-meta color-dark-1">

                                <li>
                                    <i class="regular-calendar"></i>{{ $blog->created_at }}
                                </li>

                                <li>
                                    <i class="regular-eye"></i>{{ $blog->view_count }}k
                                </li>
                            </ul>
                            <h3 class="entry-title h3-extra-large color-dark-1 underline-animation">
                                <a href="{{ route("one") }}"
                                   class="link-wrap">
                                    {!! $blog->title !!}
                                </a>
                            </h3>
                            <div class="figure-holder radius-medium box-border-dark-1">
                                <a href="{{ route("one") }}" class="link-wrap img-height-100">
                                    <img width="810" height="440"
                                         src="{{ asset("storage/{$blog->image}") }}"
                                         alt="Post"></a>
                            </div>
                            <p class="entry-description color-dark-1">
                                {!! $blog->title !!}
                            </p>
                            <div class="post-footer">

                                <a href="{{ route("blog.show", ["blog" => $blog->id]) }}" class="btn-text color-dark-1">
                                    Ko'proq o'qish
                                    <span class="icon-holder">
                                        <i class="regular-arrow-right"></i>
                                    </span></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
{{--            <div class="template-pagination pagination-center">--}}
{{--                <ul>--}}
                    <div class="center">{{ $blogs->links() }}</div>
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </section>

@stop
