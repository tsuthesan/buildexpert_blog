@extends('layouts.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('../build/assets/css/contactUs.css') }}">
@stop
@section('content')
<div class="contact-header">
    <h1>CONTACT US</h1>
</div>

<div class="container contact-section">
    <div class="row">
        <!-- Left Section -->
        <div class="col-md-4">
            <div class="left-box">
                <h4><i class="glyphicon glyphicon-earphone"></i> PHONE</h4>
                <p>0405 723 838</p>
            </div>
            <div class="left-box">
                <h4><i class="glyphicon glyphicon-envelope"></i> EMAIL</h4>
                <p>info@buildexpert.com.au</p>

            </div>
            <div class="left-box">
                <h4><i class="glyphicon glyphicon-map-marker"></i> LOCATION</h4>
                <p>6 Russell Street Nunawasing 3131 VIC</p>
            </div>
            <div class="left-box">
                <h4><i class="glyphicon glyphicon-share-alt"></i> FOLLOW US</h4>
                <p>
                    <a href="https://www.facebook.com/BuildExpertAus"><i class="glyphicon glyphicon-thumbs-up"></i> Facebook</a><br>
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
                <form action="{{ route('contact-us.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required name="email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter your phone number" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" id="company" placeholder="Enter your company name" name="company">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Any additional information" name="message"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="file">Attach Construction Plans (Just Architecture Plans)</label>
                        <div class="file-upload-box">
                            <label for="file">
                                <i class="glyphicon glyphicon-cloud-upload"></i> Drop files here or
                                <span class="btn btn-primary btn-file-upload">Select Files</span>
                            </label>
                            <input type="file" id="file" accept=".pdf,.jpg,.png,.gif" name="file">
                            <p>Accepted file types: pdf, jpg, png, gif. Max file size: 128 MB.</p>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>
</form>
    @include('layouts.footer')
@stop

