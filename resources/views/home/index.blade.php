@extends('layouts.master')
@section('title')
    ||Build Expert
@stop
@section('content')

    @include('layouts.carousel')

    <section id="construction-welcome">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 single-construction-welcome">
                    <div class="img-holder hvr-rectangle-out">
                        <img src=" {{ asset('../build/assets/img/construction-welcome/1.jpg') }}" alt="" width="370px"
                             height="182px">
                    </div>
                    <h2>Construction</h2>
                    <p>Lorem ipsum dolor sit amet, cons ectetur elit. Ves tibulum nec odios Suspe ndisse cursus mal
                        suada faci lisis. Lorem ipsum dolor.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 single-construction-welcome">
                    <div class="img-holder hvr-rectangle-out">
                        <img src=" {{ asset('../build/assets/img/construction-welcome/2.jpg') }}" alt="" width="370px"
                             height="182px">
                    </div>
                    <h2>renovation</h2>
                    <p>Lorem ipsum dolor sit amet, cons ectetur elit. Ves tibulum nec odios Suspe ndisse cursus mal
                        suada faci lisis. Lorem ipsum dolor.</p>
                </div>
                <div
                    class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-3 col-xs-offset-0 single-construction-welcome">
                    <h1>Welcome to BuildExpert</h1>
                    <p>BuildExpert,established in 2023, is on its way to becoming one of Australia's leading platforms
                        in the Construction industry.We specialize in residential and commercial estimating,drafting and
                        3D modeling services,delivering expert solutions tailored to builders and trades. Our mission
                        extends beyond service delivery;we also committed to creating valuable construction-related
                        contyent,sharing our expertise with a broader audience.</p>
                    <ul>
                        <li><i class="fa fa-arrow-circle-o-right"></i> Interior design Package</li>
                        <li><i class="fa fa-arrow-circle-o-right"></i> Reparing of Residentail Roof</li>
                        <li><i class="fa fa-arrow-circle-o-right"></i> Hardwood Flooring</li>
                        <li><i class="fa fa-arrow-circle-o-right"></i> Renovaion of Commercial Office</li>
                        <li><i class="fa fa-arrow-circle-o-right"></i> Make Quality Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section id="welcome-to-construct">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="img-holder hvr-rectangle-out pull-right">
                        <img src="{{ asset('../build/assets/img/welcome-to-construct/1.jpg') }}" alt="" width="845px"
                             height="404px">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <h2>Welcome to construct press</h2>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
                        quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliq uam quae rat
                        voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
                    <h3>We are available for 24/7 for you requirements</h3>
                    <div class="list-box clearfix">
                        <ul>
                            <li><i class="fa fa-hand-o-right"></i> COMPLETE SAFETY ANALYSIS</li>
                            <li><i class="fa fa-hand-o-right"></i> DRIVABILITY PROBLEMS</li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-hand-o-right"></i> COMPLETE SAFETY ANALYSIS</li>
                            <li><i class="fa fa-hand-o-right"></i> DRIVABILITY PROBLEMS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(!$newTechnologyPosts->isEmpty())
    <section id="blog-construct">
        <div class="container">
            <div class="section-title">
                <h1>New Technology</h1>
            </div>
            <div class="row">
                @foreach($newTechnologyPosts as $tech)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single-blog-post">
                        <div class="img-holder hvr-rectangle-out">
                            <img src="{{ Storage::url($tech->image) }}" alt="{{ $tech->title }}" width="370px"
                                 height="202px">
                            <div class="date">
                                <b>{{ $tech->created_at->format('d') }}</b> <br> {{ $tech->created_at->format('M') }}
                            </div>
                        </div>
                        <a href="#"><h2>{{ $tech->title }}</h2></a>
                        <p>{{$tech->content}}</p>
                        <ul>
                            <li><span><b>By: </b> Admin</span></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    @if(!$reviewPosts->isEmpty())
    <section id="blog-construct">
        <div class="container">
            <div class="section-title">
                <h1>Reviews</h1>
            </div>

            <div class="row">
                @foreach($reviewPosts as $review)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single-blog-post">
                        <div class="img-holder hvr-rectangle-out">
                            <img src="{{ Storage::url($review->image)  }}" alt=" {{ $review->title }}" width="370px"
                                 height="202px">
                            <div class="date">
                                <b>{{ $review->created_at ->format('d') }}</b> <br>{{ $review->created_at->format('M') }}
                            </div>
                        </div>
                        <a href="{{ route('blogs.show',$review->id) }}"><h2>{{$review->title}}</h2></a>
                        <p>{{ $review->body }}</p>
                        <ul>
                            <li><span><b>By: </b> Admin</span></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>

        </div>
    </section>
    @endif

    <section id="blog-construct">
        <div class="container">
            <div class="section-title">
                <h1>News</h1>
            </div>

            <div class="row">
                @foreach($newsPosts as $new)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single-blog-post">
                        <div class="img-holder hvr-rectangle-out">
                            <img src="{{ Storage::url($new->image)  }}" alt=" {{ $new->title }}" width="370px"
                                 height="202px">
                            <div class="date">
                                <b>{{ $new->created_at ->format('d') }}</b> <br> {{ $new->created_at ->format('M') }}
                            </div>
                        </div>
                        <a href="#"><h2>{{$new->title}}</h2></a>
                        <p>{{ $new->body }}</p>
                        <ul>
                            <li><span><b>By: </b> Admin</span></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>

        </div>
    </section>

    <section id="great-construct-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Great Construction Company</h2>
                    <p>If you have any construction and renovation work need, simply <br>call our 24 hour emergecny
                        number.</p>
                    <p class="has-btn"><b>01865 524 8503</b> or <a href="#" class="hvr-bounce-to-right">Contact Us</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
    @include('layouts.bottom-bar')
@stop


