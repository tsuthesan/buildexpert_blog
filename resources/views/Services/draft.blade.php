@extends('layouts.master')
@section('content')
    <section id="service-we-provide" class="construct">
        <div class="container">
            <div class="section-title">
                <h1>Services that we offer</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 wow slideInLeft">
                    <div class="service-tab-title">
                        <ul class="clearfix">
                            <li class="active" data-tab-name="Drafting">Drafting</li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 wow slideInRight">
                    <div class="row">
                        <div class="service-tab-content clearfix">

                            <div id="Drafting">
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <p>Designed to bring your architectural visions to life. Our skilled team provides precise and detailed drawings that cater to the unique requirements of your project, ensuring a smooth transition from concept to construction.</p>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <img src="{{ asset('../build/assets/img/service-we-provide/1.jpg')}}" alt="" height="165px" width="279px">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <ul>
                                                <li><i class="fa fa-arrow-circle-o-right"></i>Residential drafting </li>
                                                <li><i class="fa fa-arrow-circle-o-right"></i>Detailed drawings</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
                                    <img src="{{ asset('../build/assets/img/service-we-provide/2.png')}}" alt="" height="508px" width="288px">
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </br>
    @include('layouts.footer')
@stop
