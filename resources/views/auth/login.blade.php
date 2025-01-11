@extends('layouts.master')
@section('title')
    Login
@stop
@section('styles')
    <link rel="stylesheet" href="{{ asset('../build/assets/css/login.css') }}">
@stop
@section('scripts')
    <script src="{{ asset('../build/assets/js/login.js') }}"></script>
@stop
@section('content')
{{--    <div class="row">--}}
{{--        <div class="col col-6">--}}
{{--            <form action="{{ route('login.store') }}" method="POST">--}}
{{--                @csrf--}}
{{--                <div class="form-group">--}}
{{--                    <label for="email">Email Address <span>*</span></label>--}}
{{--                    <input type="email" placeholder="Email" id="email" name="email" class="form-control">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="password"> Password </label>--}}
{{--                    <input type="password" placeholder="Password" id="password" name="password" class="form-control">--}}
{{--                </div>--}}

{{--                <button type="submit" class="btn btn-success"> Submit </button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
<div class="container">
    <div class="login-container">
        <div id="output"></div>
        <div class="avatar"></div>
        <div class="form-box">
            <form action="{{ route('login.store') }}" method="POST">
                @csrf
                <label for="email">Email Address <span>*</span></label>
                <input name="email" type="email" placeholder="Email" class="form-control">
                <label for="password"> Password </label>
                <input type="password" placeholder="Password" id="password" name="password" class="form-control">
                <button class="btn btn-info btn-block login" type="submit">Login</button>
            </form>
        </div>
    </div>

</div>


@stop
