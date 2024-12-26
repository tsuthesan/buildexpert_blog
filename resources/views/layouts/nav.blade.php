<header class="construct header-curvy" style="border-top: 0px">
    <div class="search-box">
        <div class="container">
            <div class="pull-right search  col-lg-3 col-md-4 col-sm-5 col-xs-12">
                <form action="#">
                    <input type="text" placeholder="Search Here"> <button type="submit"><i class="icon icon-Search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="cart-box">
        <div class="container">
            <div class="pull-right cart col-lg-6 col-xs-12">
                <p><i class="icon icon-FullShoppingCart"></i> You Have <span>1 Item</span> in your Cart. Price is <span>$199</span></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="clearfix">
            <div class="pull-left logo">
                <a href="{{ route('welcome') }}">
                    <img src="" alt="">
                    <img src="{{ asset('../build/assets/img/resources/build-logo.png') }}" alt="buildexpert">
                </a>
            </div>
            <nav class="pull-right mainmenu-container clearfix">
                <ul class="top-icons-wrap pull-right">
                    <li class="top-icons search"><a href="#"><i class="icon icon-Search"></i></a></li>
                    <li class="top-icons cart"><a href="#"><i class="icon icon-ShoppingCart"></i></a></li>
                </ul>
                <button class="mainmenu-toggler">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="mainmenu pull-right">
                    <li class="current"><a href="{{ route('welcome') }}">Home</a></li>
                    <li class="dropdown">
                        <a href="{{ route('services.index') }}">Our Services</a>
                        <ul class="submenu">
                            <li><a href="{{ route('services.estimate') }}">Estmating</a></li>
                            <li><a href="{{ route('services.draft') }}">Drafting</a></li>
                            <li><a href="{{ route('services.render') }}"> 3D Rendering</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('blogs.index') }}">Expert-Eye</a>
                        <ul class="submenu">
                            <li><a href="{{route('blogs.review')}}">Reviews</a></li>
                            <li><a href="{{route('blogs.tech')}}"> New technology </a></li>
                            <li><a href="{{route('blogs.news')}}"> News </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#">Extimator</a>
                        <ul class="submenu">
                            <li><a href="search-result.html">New House</a></li>
                            <li class="dropdown">
                                <a href="about.html">Interior</a>
                                <ul class="submenu">
                                    <li><a href="team.html">Flooring</a></li>
                                    <li><a href="faq.html">Bath room</a></li>
                                    <li><a href="faq.html">Air Conditioning</a></li>
                                    <li><a href="faq.html">Lighting</a></li>
                                    <li><a href="faq.html">Curtain/Blinds</a></li>
                                    <li><a href="faq.html">Kitchen Upgrade</a></li>
                                    <li><a href="faq.html">Painting</a></li>
                                    <li><a href="faq.html"> Security System</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">

                                <a href="about.html">Exterior</a>
                                <ul class="submenu">
                                    <li><a href="team.html">Our Team</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li class="dropdown">
                        <a href="shop.html">Admin</a>
                        <ul class="submenu">
                            <li><a href="{{ route('blogs.create') }}">New News</a></li>
{{--                            <li><a href="{{ route('blogs.overview') }}">Overview</a></li>--}}
                            <li><a href="{{ route('tags.index') }}">Tags</a></li>
{{--                            <li><a href="{{ route('users.index') }}">Users</a></li>--}}
                            <li><a href="{{ route('permissions.index') }}">Permission</a></li>
{{--                            <li><a href="{{ route('roles.index') }}">Roles</a></li>--}}
{{--                            <li><a href="{{ route('logout') }}">Sign Out</a></li>--}}
                        </ul>
                    </li>


                </ul>
            </nav>
        </div>
    </div>
</header>
