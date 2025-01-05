@extends('layouts.master')

@section('content')


    <!-- #page-title -->
    <section id="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- .title -->
                    <div class="title pull-left">
                        <h1>blogs</h1>
                    </div> <!-- /.title -->
                    <!-- .page-breadcumb -->
                    <div class="page-breadcumb pull-right">
                        <i class="fa fa-home"></i> <a href="{{ route('welcome') }}">Home</a> <i class="fa fa-angle-right"></i> <span>blogs</span>
                    </div> <!-- /.page-breadcumb -->
                </div>
            </div>
        </div>
    </section> <!-- /#page-title -->

    <!-- #blog-post -->
    <section id="blog-post">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-push-0 col-md-push-0 col-sm-push-3 col-xs-push-0 sidebar blog-left">
                    <!-- .sidebar-widget -->
                    <div class="sidebar-widget">
                        <h4>Search</h4>
                        <form action="#" class="search-form">
                            <input type="text" placeholder="Enter Search Keywords">
                            <button type="submit"><i class="icon icon-Search"></i></button>
                        </form>
                    </div> <!-- /.sidebar-widget -->

                    <!-- .sidebar-widget -->
                    {{--                    <div class="sidebar-widget">--}}
                    {{--                        <h4>Popular Posts</h4>--}}
                    {{--                        <ul class="popular-post">--}}
                    {{--                            <li class="clearfix">--}}
                    {{--                                <div class="image-box">--}}
                    {{--                                    <img src="{{ asset('../build/assets/img/blog-popular-post/1.jpg')}}" alt="">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="content-wrap">--}}
                    {{--                                    <a href="#"><h5>Neque porro quisqua mest qui dolorem porro quisqua mest qui</h5></a>--}}
                    {{--                                    <span>20 June</span>--}}
                    {{--                                </div>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="clearfix">--}}
                    {{--                                <div class="image-box">--}}
                    {{--                                    <img src="{{ asset('../build/assets/img/blog-popular-post/2.jpg') }}" alt="">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="content-wrap">--}}
                    {{--                                    <a href="#"><h5>Neque porro quisqua mest qui dolorem porro quisqua mest qui</h5></a>--}}
                    {{--                                    <span>20 June</span>--}}
                    {{--                                </div>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="clearfix">--}}
                    {{--                                <div class="image-box">--}}
                    {{--                                    <img src="{{ asset('../build/assets/img/blog-popular-post/3.jpg') }}" alt="">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="content-wrap">--}}
                    {{--                                    <a href="#"><h5>Neque porro quisqua mest qui dolorem porro quisqua mest qui</h5></a>--}}
                    {{--                                    <span>20 June</span>--}}
                    {{--                                </div>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </div>--}}
                    <!-- /.sidebar-widget -->

                    <!-- .sidebar-widget -->
                    {{--                    <div class="sidebar-widget">--}}
                    {{--                        <h4>Categories</h4>--}}
                    {{--                        <ul class="category-list">--}}
                    {{--                            <li><a href="#">Builing Construction</a></li>--}}
                    {{--                            <li><a class="active" href="#">Building Interior Renovation</a></li>--}}
                    {{--                            <li><a href="#">Hardwood Flooring</a></li>--}}
                    {{--                            <li><a href="#">Roof Repairing</a></li>--}}
                    {{--                            <li><a href="#">Architecture Consulting</a></li>--}}
                    {{--                            <li><a href="#">Interior Design Package</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </div>--}}
                    <!-- /.sidebar-widget -->

                    <!-- .sidebar-widget -->
                    {{--                    <div class="sidebar-widget">--}}
                    {{--                        <h4>Flicker Widget</h4>--}}
                    {{--                        <ul class="flicker-widget">--}}
                    {{--                            <li><a href="#">--}}
                    {{--                                    <img src="{{ asset('../build/assets/img/flicker-widget/1.jpg') }}" alt="">--}}
                    {{--                                </a></li>--}}
                    {{--                            <li><a href="#">--}}
                    {{--                                    <img src="{{ asset('../build/assets/img/flicker-widget/2.jpg') }}" alt="">--}}
                    {{--                                </a></li>--}}
                    {{--                            <li><a href="#">--}}
                    {{--                                    <img src="{{asset('../build/assets/img/flicker-widget/3.jpg')}}" alt="">--}}
                    {{--                                </a></li>--}}
                    {{--                            <li><a href="#">--}}
                    {{--                                    <img src=" {{ asset('../build/assets/img/flicker-widget/4.jpg') }}" alt="">--}}
                    {{--                                </a></li>--}}
                    {{--                            <li><a href="#">--}}
                    {{--                                    <img src="{{ asset('../build/assets/img/flicker-widget/5.jpg') }}" alt="">--}}
                    {{--                                </a></li>--}}
                    {{--                            <li><a href="#">--}}
                    {{--                                    <img src="{{ asset('../build/assets/img/flicker-widget/6.jpg') }}" alt="">--}}
                    {{--                                </a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </div> --}}
                    <!-- /.sidebar-widget -->

                    <!-- .sidebar-widget -->
                    {{--                    <div class="sidebar-widget text-widget">--}}
                    {{--                        <h4>Text Widget</h4>--}}
                    {{--                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore que laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi arch itecto beatae vitae dict eaque ipsa quae.</p>--}}
                    {{--                    </div> <!-- /.sidebar-widget -->--}}

                    {{--                    <!-- .sidebar-widget -->--}}
                    {{--                    <div class="sidebar-widget">--}}
                    {{--                        <h4>Archives</h4>--}}
                    {{--                        <ul class="category-list">--}}
                    {{--                            <li><a href="#">January 2014</a></li>--}}
                    {{--                            <li><a class="active" href="#">September 2013</a></li>--}}
                    {{--                            <li><a href="#">August 2013</a></li>--}}
                    {{--                            <li><a href="#">Roof Repairing</a></li>--}}
                    {{--                            <li><a href="#">July 2013</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </div> <!-- /.sidebar-widget -->--}}

                    {{--                    <!-- .sidebar-widget -->--}}
                    {{--                    <div class="sidebar-widget">--}}
                    {{--                        <h4>Tags Clouds</h4>--}}
                    {{--                        <div class="tag-cloud">--}}
                    {{--                            <a href="#">Kitchen Plumbing </a>--}}
                    {{--                            <a href="#">Pipe fixes</a>--}}
                    {{--                            <a href="#">Drain Cleaning</a>--}}
                    {{--                            <a href="#">tips</a>--}}
                    {{--                            <a href="#">Pipe leakages</a>--}}
                    {{--                            <a href="#">outside Plumbing </a>--}}
                    {{--                        </div>--}}
                    {{--                    </div> <!-- /.sidebar-widget -->--}}
                </div> <!-- /.sidebar -->

                <!-- .blog-content -->
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 blog-content">

                    <article>
                        <div class="img-holder">
                            <img src="{{ Storage::url($blog->image)  }}" alt=" {{ $blog->title }}">
                            <div class="date-holder">
                                <b>{{ $blog->created_at ->format('d') }}</b>
                                {{ $blog->created_at->format('M') }}
                            </div>
                        </div>
                        <h2>{{ $blog-> title }}</h2>
                        <ul class="meta">
                            <li><a href="#"><i class="fa fa-user"></i> By Admin</a></li>
                            <li><a href="#"><i class="fa fa-tag"></i> Outside Construction Tips</a></li>
                            <li><a href="#"><i class="fa fa-comments-o"></i> Comments: 5</a></li>
                        </ul>
                        <p>{!!($blog->content)  !!} </p>
                    </article>








                </div> <!-- /.blog-content -->

                <!-- .sidebar -->

            </div>
        </div>
    </section> <!-- /#blog-post -->



    {{--    <section id="great-construct-team">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-6">--}}
    {{--                    <h2>Great Construction Company</h2>--}}
    {{--                    <p>If you have any construction and renovation work  need, simply <br>call our 24 hour emergecny number.</p>--}}
    {{--                    <p class="has-btn"><b>01865 524 8503</b> or <a href="#" class="hvr-bounce-to-right">Contact Us</a></p>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

@stop

@section('footer')
    @include('layouts.footer')
@stop
