<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Construction Press || Responsive HTML Template</title>

    <!-- Responsive Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('layouts.partials.css');



</head>
<body>

<!-- header -->
@include('layouts.nav')

<section id="checkout-content">
    <div class="container">
        <form action="{{ route('register.store') }}" method="POST">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 left-checkout">

                    @csrf
                    <div class="row">
                        <div class="col-lg-12 order-box">
                            <div class="col-lg-12">
                                <label for="name">Name <span>*</span></label>
                                <input type="text" placeholder="First Name" id="name" name="name">
                            </div>
                            <div class="col-lg-12">
                                <label for="email">Email <span>*</span></label>
                                <input type="email" placeholder="Email" id="email" name="email">
                            </div>
                            <div class="col-lg-12">
                                <label for="password">Password</label>
                                <input type="password" placeholder="Password" id="password" name="password">
                            </div>
                            <div>
                                <ul>
                                    <button type="submit">Register</button>
                                </ul>
                            </div>
                        </div>
                    </div>


            </div>
            {{--                <div class="row">--}}
            {{--                    <div class="col-lg-6">--}}
            {{--                        <input type="checkbox"> <span>create an account</span>--}}
            {{--                    </div>--}}
            {{--                </div>--}}


        </div>
    </form>
    </div>
</section>


<!-- #bottom-bar -->
<section id="bottom-bar" class="construct">
    <div class="container">
        <div class="row">
            <!-- .copyright -->
            <div class="copyright pull-left">
                <p>Copyright &copy; Plumberx 2015. All rights reserved. </p>
            </div> <!-- /.copyright -->
            <!-- .credit -->
            <div class="credit pull-right">
                <p>Created by: DesignArc</p>
            </div> <!-- /.credit -->
        </div>
    </div>
</section><!-- /#bottom-bar -->


@include('layouts.partials.js')

</body>
</html>
