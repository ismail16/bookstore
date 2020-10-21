<!-- Header -->
<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 pl-0 pr-0">
                <div class="logo" style="position: relative;">
                    <a href="index.html">
                        <img src="http://preview.freethemescloud.com/boighor-v3/images/logo/logo.png" alt="logo images" class="w-25">
                    </a>
                    <a href="#">
                        <i class="fa fa-shopping-cart mr-3" style="
                            position: relative; 
                            font-size: 19px;
                            color: #fff;
                        }">
                        <span class="text-warning" style="
                            position: absolute;
                            top: -7px;
                            background: #050001;
                            border-radius: 10px;
                            padding: 3px;
                            height: 13px;
                            width: 13px;
                            font-size: 10px;
                            ">4
                        </span>
                      </i>
                    </a>

                    @if (Route::has('login'))
                        @auth
                            @if(Auth::user()->role->id == 1)
                            <a href="{{route('admin.dashboard')}}">
                                    <i class="fa fa-user-circle-o mr-2 ml-1" style="
                                        font-size: 19px;
                                        color: #fff;
                                    }">
                                    Dashboard
                                    </i>
                                </a>

                            @elseif(Auth::user()->role->id == 2)

                            <a href="{{route('author.dashboard')}}">
                                    <i class="fa fa-user-circle-o mr-2 ml-1" style="
                                        font-size: 19px;
                                        color: #fff;
                                    }">
                                    Dashboard
                                    </i>
                                </a>
                            @endif

                            <form action="{{ route('logout') }}" method="POST" class="logout_btn" style="position: relative;top: -67px;left: 335px;">
                                @csrf
                                <button class="fa fa-user-circle-o mr-2 ml-1 btn btn-link text-light border-danger p-1"  type="submit">Logout</button>
                            </form>
                        @else
                            @if (Route::has('register'))
                                <a href="{{route('authorRegister')}}">
                                    <i class="fa fa-user-circle-o mr-2 ml-1" style="
                                        font-size: 19px;
                                        color: #fff;
                                    }">
                                    Register
                                    </i>
                                </a>
                            @endif
                                <a href="{{route('authorLogin')}}">
                                    <i class="fa fa-user-circle-o mr-2 ml-1" style="
                                        font-size: 19px;
                                        color: #fff;
                                    }">
                                    Login
                                    </i>
                                </a>
                        @endauth
                    @endif

                    

                </div>
            </div>
            <div class="col-md-6  pl-0 pr-0 d-flex align-items-center">
                <div class="input-group" style="top: 15px;">
                    <div class="input-group-prepend">
                        <select class="form-control w-100 rounded-0">
                            <option>Select</option>
                        </select>    
                    </div>
                    <input type="text" name="title_or_keyword" class="form-control" placeholder="Search for Journal..">
                    <div class="input-group-append">
                        <input type="submit" value="Search" name="search" class="btn btn-primary rounded-0">
                    </div>
                </div>
            </div>
        </div>
        <div class="row pr-2 pl-2 d-flex justify-content-center">
            <div class="col-lg-8 d-none d-lg-block">
                <nav class="mainmenu__nav">
                    <ul class="meninmenu d-flex justify-content-start">
                        <li class=""><a href="/">Home</a> </li>
                        <li class="drop">
                            <a href="shop-grid.html">Books</a>
                            <div class="megamenu mega03">
                                <ul class="item item03">
                                    <li class="title">Categories</li>
                                    <li><a href="shop-grid.html">Biography </a></li>
                                </ul>
                                <ul class="item item03">
                                    <li class="title">Favourite</li>
                                    <li><a href="shop-grid.html">Mystery</a></li>
                                </ul>
                                <ul class="item item03">
                                    <li class="title">Collections</li>
                                    <li><a href="shop-grid.html">Science </a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="drop">
                            <a href="blog.html">Blog</a>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Start Mobile Menu -->
        <div class="row d-none">
            <div class="col-lg-12 d-none">
                <nav class="mobilemenu__nav">
                    <ul class="meninmenu">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul>
                                <li><a href="about.html">About Page</a></li>
                                <li><a href="portfolio.html">Portfolio</a>
                                    <ul>
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li><a href="portfolio-three-column.html">Portfolio 3 Column</a></li>
                                        <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="cart.html">Cart Page</a></li>
                            </ul>
                        </li>
                        <li><a href="shop-grid.html">Shop</a>
                            <ul>
                                <li><a href="shop-grid.html">Shop Grid</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a>
                            <ul>
                                <li><a href="blog.html">Blog Page</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End Mobile Menu -->
        <div class="mobile-menu d-block d-lg-none">

        </div>
        <!-- Mobile Menu -->    
    </div>      
</header>
<!-- //Header -->