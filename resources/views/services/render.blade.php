@extends('layouts.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('../build/assets/css/custom.css') }}">
@stop
@section('content')
    <section id="service-we-provide" class="construct">
        <div class="container">
            <div class="section-title">
                <h1>Services that we offers</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 wow slideInLeft">
                    <div class="service-tab-title">
                        <ul class="clearfix">
                            <li class="active" data-tab-name="Rendering">3D Rendering</li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 wow slideInRight">
                    <div class="row">
                        <div class="service-tab-content clearfix">
                            <div id="Rendering">
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <p>We craft realistic 3D visualizations that bring your designs to life, helping you
                                        communicate your vision, make informed decisions, and impress clients with
                                        lifelike presentations.</p>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <img src="{{ asset('../build/assets/img/service-we-provide/3D rendering.jpg')}}" alt=""
                                                 height="165px" width="279px">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <ul>
                                                <li><i class="fa fa-arrow-circle-o-right"></i>3D Exterior rendering</li>
                                                <li><i class="fa fa-arrow-circle-o-right"></i>3D Interior rendering</li>
                                                <li><i class="fa fa-arrow-circle-o-right"></i>3D Videos</li>
                                                <li><i class="fa fa-arrow-circle-o-right"></i>Product Modeling</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn d-flex justify-content-center">
                                    <img class="img-fluid custom-img" src="{{ asset('../build/assets/img/service-we-provide/2.png')}}" alt=""
                                         height="508px" width="288px">
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
