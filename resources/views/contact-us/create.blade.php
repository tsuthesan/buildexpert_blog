@extends('layouts.master')
@section('content')
    <section id="contact-content">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Feel Free to Drop Us A Line To Contact Us</h1>
                    </div>
                </div>
{{--              <div class="col-lg-8 col-md-6 S col-12 ">--}}
              <div class="col-12 col-lg-8">

                    <form class="row row-cols-xl g-4 align-items-center">
                        <div class=" col-12">
                            <label class="visually-hidden" for="name">Name</label>
                            <div class="input-group">
                                <div class="input-group-text"><i class="fa-regular fa-user"></i></div>
                                <input type="text" class=" form-control form-control-lg" id="name" placeholder="Name" style="height:30%">
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="visually-hidden" for="email">Email</label>
                            <div class="input-group">
                                <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
                                <input type="email" class="form-control form-control-lg" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="visually-hidden" for="subject">Subject</label>
                            <div class="input-group">
                                <div class="input-group-text"><i class="fa-regular fa-user"></i></div>
                                <input type="text" class="form-control form-control-lg" id="subject" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="visually-hidden" for="company">Company</label>
                            <div class="input-group">
                                <div class="input-group-text"><i class="fa-solid fa-building"></i></div>
                                <input type="text" class="form-control form-control-lg" id="company" placeholder="Campany">
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="visually-hidden" for="phoneNumber">Phone Number</label>
                            <div class="input-group">
                                <div class="input-group-text"><i class="fa-solid fa-phone"></i></div>
                                <input type="tel" class="form-control form-control-lg" id="phoneNumber" placeholder="PhoneNumber"
                               pattern=" /^(\+61|0)[2-478](\d{8})$/" >
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="visually-hidden" for="file">Attach File</label>
                            <div class="input-group">
                                <input type="file" class="form-control form-control-lg" id="file" placeholder="Attach File">
                            </div>
                            <small id="fileError" style="color:red;display:none;">Invalid file. Please upload a PDF file.</small>

                        </div>
                        <div class="col-12">
                            <label class="visually-hidden" for="message">Message</label>
                            <div class="input-group">
                                <div class="input-group-text"><i class="fa-solid fa-message"></i></div>
                                <textarea type="text" class="form-control form-control-lg" id="message" placeholder="Message" rows="5"> </textarea>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 contact-info">
                    <ul>
                        <li>
                            <div class="icon-box">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="text-box">
                                <p>6 Russel Street Nunawading <br>3131 VIC</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-box">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="text-box">
                                <p>info@buildexpert.com.au <br></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-box">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="text-box">
                                <p>0405 723 838 <br>0405 723 838</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> <!-- /#contact-content -->
@stop

