{{--@extends('layouts.master')--}}
{{--@section('content')--}}
{{--    <section id="contact-content">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}

{{--                <div class="col-md-12">--}}
{{--                    <div class="section-title">--}}
{{--                        <h1>Feel Free to Drop Us A Line To Contact Us</h1>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--              <div class="col-lg-8 col-md-6 S col-12 ">--}}
{{--              <div class="col-12 col-lg-8">--}}

{{--                    <form class="row row-cols-xl g-4 align-items-center">--}}
{{--                        <div class=" col-12">--}}
{{--                            <label class="visually-hidden" for="name">Name</label>--}}
{{--                            <div class="input-group">--}}
{{--                                <div class="input-group-text"><i class="fa-regular fa-user"></i></div>--}}
{{--                                <input type="text" class=" form-control form-control-lg" id="name" placeholder="Name" style="height:30%">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12">--}}
{{--                            <label class="visually-hidden" for="email">Email</label>--}}
{{--                            <div class="input-group">--}}
{{--                                <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>--}}
{{--                                <input type="email" class="form-control form-control-lg" id="email" placeholder="Email">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12">--}}
{{--                            <label class="visually-hidden" for="subject">Subject</label>--}}
{{--                            <div class="input-group">--}}
{{--                                <div class="input-group-text"><i class="fa-regular fa-user"></i></div>--}}
{{--                                <input type="text" class="form-control form-control-lg" id="subject" placeholder="Subject">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12">--}}
{{--                            <label class="visually-hidden" for="company">Company</label>--}}
{{--                            <div class="input-group">--}}
{{--                                <div class="input-group-text"><i class="fa-solid fa-building"></i></div>--}}
{{--                                <input type="text" class="form-control form-control-lg" id="company" placeholder="Campany">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-12">--}}
{{--                            <label class="visually-hidden" for="phoneNumber">Phone Number</label>--}}
{{--                            <div class="input-group">--}}
{{--                                <div class="input-group-text"><i class="fa-solid fa-phone"></i></div>--}}
{{--                                <input type="tel" class="form-control form-control-lg" id="phoneNumber" placeholder="PhoneNumber"--}}
{{--                               pattern=" /^(\+61|0)[2-478](\d{8})$/" >--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-12">--}}
{{--                            <label class="visually-hidden" for="file">Attach File</label>--}}
{{--                            <div class="input-group">--}}
{{--                                <input type="file" class="form-control form-control-lg" id="file" placeholder="Attach File">--}}
{{--                            </div>--}}
{{--                            <small id="fileError" style="color:red;display:none;">Invalid file. Please upload a PDF file.</small>--}}

{{--                        </div>--}}
{{--                        <div class="col-12">--}}
{{--                            <label class="visually-hidden" for="message">Message</label>--}}
{{--                            <div class="input-group">--}}
{{--                                <div class="input-group-text"><i class="fa-solid fa-message"></i></div>--}}
{{--                                <textarea type="text" class="form-control form-control-lg" id="message" placeholder="Message" rows="5"> </textarea>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-12">--}}
{{--                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 contact-info">--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <div class="icon-box">--}}
{{--                                <i class="fa fa-map-marker"></i>--}}
{{--                            </div>--}}
{{--                            <div class="text-box">--}}
{{--                                <p>6 Russel Street Nunawading <br>3131 VIC</p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="icon-box">--}}
{{--                                <i class="fa fa-envelope-o"></i>--}}
{{--                            </div>--}}
{{--                            <div class="text-box">--}}
{{--                                <p>info@buildexpert.com.au <br></p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="icon-box">--}}
{{--                                <i class="fa fa-phone"></i>--}}
{{--                            </div>--}}
{{--                            <div class="text-box">--}}
{{--                                <p>0405 723 838 <br>0405 723 838</p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section> <!-- /#contact-content -->--}}
{{--@stop--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .contact-header {
            background-color: #003366;
            color: white;
            padding: 30px 0;
            text-align: center;
        }
        .contact-header h1 {
            margin: 0;
            font-size: 36px;
            font-weight: bold;
        }
        .contact-section {
            margin-top: 20px;
        }
        .left-box {
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }
        .left-box h4 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .left-box p {
            margin: 0;
            font-size: 14px;
        }
        .form-section {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
        }
        .form-section h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .form-section p {
            font-size: 14px;
            margin-bottom: 20px;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .file-upload-box {
            border: 2px dashed #ccc;
            padding: 20px;
            text-align: center;
            background-color: #f9f9f9;
            margin-bottom: 15px;
        }
        .file-upload-box input {
            display: none;
        }
        .file-upload-box label {
            cursor: pointer;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>

<div class="contact-header">
    <h1>CONTACT US</h1>
</div>

<div class="container contact-section">
    <div class="row">
        <!-- Left Section -->
        <div class="col-md-4">
            <div class="left-box">
                <h4><i class="glyphicon glyphicon-earphone"></i> PHONE</h4>
                <p>0434 342 316</p>
            </div>
            <div class="left-box">
                <h4><i class="glyphicon glyphicon-envelope"></i> EMAIL</h4>
                <p>info@bluelevel.com.au</p>
                <p>rick@bluelevel.com.au</p>
            </div>
            <div class="left-box">
                <h4><i class="glyphicon glyphicon-map-marker"></i> LOCATION</h4>
                <p>Corporate One</p>
            </div>
            <div class="left-box">
                <h4><i class="glyphicon glyphicon-share-alt"></i> FOLLOW US</h4>
                <p>
                    <a href="#"><i class="glyphicon glyphicon-thumbs-up"></i> Facebook</a><br>
                    <a href="#"><i class="glyphicon glyphicon-camera"></i> Instagram</a><br>
                    <a href="#"><i class="glyphicon glyphicon-globe"></i> Twitter</a>
                </p>
            </div>
        </div>

        <!-- Right Section -->
        <div class="col-md-8">
            <div class="form-section">
                <h2>REQUEST QUOTE</h2>
                <p>Leave your request for consultation</p>
                <form>
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" id="company" placeholder="Enter your company name">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Any additional information"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="file-upload">Attach Construction Plans (Just Architecture Plans)</label>
                        <div class="file-upload-box">
                            <label for="file-upload">
                                <i class="glyphicon glyphicon-cloud-upload"></i> Drop files here or
                                <span class="btn btn-primary btn-file-upload">Select Files</span>
                            </label>
                            <input type="file" id="file-upload" accept=".pdf,.jpg,.png,.gif">
                            <p>Accepted file types: pdf, jpg, png, gif. Max file size: 128 MB.</p>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
