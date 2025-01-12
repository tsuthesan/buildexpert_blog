@extends('layouts.master')
@section('content')
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
                        <i class="fa fa-home"></i> <a href="{{ route('welcome') }}">Home</a> <i
                            class="fa fa-angle-right"></i> </i> <span>Expert-eye</span> <i
                            class="fa fa-angle-right"></i> <span>Review</span>
                    </div> <!-- /.page-breadcumb -->
                </div>
            </div>
        </div>
    </section>
    <section id="blog-post">
        <div class="container">
            <div class="row">

                <div
                    class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-push-0 col-md-push-0 col-sm-push-3 col-xs-push-0 sidebar blog-left">
                    <!-- .sidebar-widget -->
                    <div class="sidebar-widget">
                        <h4>Search</h4>
                        <form action="#" class="search-form">
                            <input type="text" placeholder="Enter Search Keywords">
                            <button type="submit"><i class="icon icon-Search"></i></button>
                        </form>
                    </div> <!-- /.sidebar-widget -->


                </div> <!-- /.sidebar -->

                <!-- .blog-content -->
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 blog-content">
                    @foreach($blogs as $blog)
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
                            <p>{{ Str::limit($blog->body,300) }}</p>
                            <a href="{{ route('blogs.show',$blog->id) }}">Read More <i
                                    class="fa fa-long-arrow-right"></i></a>
                        </article>

                    @endforeach



                    {{  $blogs->links()  }}


                </div> <!-- /.blog-content -->

                <!-- .sidebar -->

            </div>
        </div>
    </section> <!-- /#page-title -->
@stop
