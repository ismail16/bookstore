<!-- Header -->
<header id="_wn__header" class="_oth-page _header__area _header__absolute sticky__header">
    <div class="container-fluid">
        <div class="row" style="    position: relative;">
            <div class="col-md-3 pl-0 pr-0">
                <div class="logo" style="position: relative;">
                    <a href="index.html">
                        <img src="http://preview.freethemescloud.com/boighor-v3/images/logo/logo.png" alt="logo images" class="">
                    </a>
                </div>
            </div>
            <div class="col-md-5  pl-0 pr-0 d-flex align-items-center">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <select class="form-control w-100 rounded-0">
                            <option value="বিষয়">বই</option>
                            <option value="লেখক">লেখক</option>
                            <option value="প্রকাশনী">প্রকাশনী</option>
                        </select>    
                    </div>
                    <input type="text" name="title_or_keyword" class="form-control" placeholder="Search for Journal..">
                    <div class="input-group-append">
                        <input type="submit" value="Search" name="search" class="btn btn-primary rounded-0">
                    </div>
                </div>
            </div>

            <div class="col-md-3 d-flex flex-row-reverse  d-flex align-items-center">
                <span class="mobile_menu">
                    <a href="#">
                        <i class="fa fa-shopping-cart mr-2" style="
                            position: relative; 
                            font-size: 19px;
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
                            ">
                            {{ App\Models\Cart::totalItems() }}
                        </span>
                      </i>
                    </a>

                    @if (Route::has('login'))
                        @auth
                            @if(Auth::user()->role->id == 1)
                            <a href="{{route('admin.dashboard')}}">
                                    <i class="fa fa-user-circle-o mr-2 ml-1" style="
                                        font-size: 19px;
                                    }">
                                    Dashboard
                                    </i>
                                </a>

                            @elseif(Auth::user()->role->id == 2)

                            <a href="{{route('author.dashboard')}}">
                                    <i class="fa fa-user-circle-o mr-2 ml-1" style="
                                        font-size: 19px;
                                    }">
                                    Dashboard
                                    </i>
                                </a>
                            @endif

                            <form action="{{ route('logout') }}" method="POST" class="logout_btn" style="position: relative;top: -67px;left: 335px;">
                                @csrf
                                <button class="fa fa-user-circle-o mr-2 ml-1 btn btn-link border-danger p-1"  type="submit">Logout</button>
                            </form>
                        @else
                            @if (Route::has('register'))
                                <a href="{{route('authorRegister')}}" class="text-dark">
                                    <i class="fa fa-user-circle-o ml-1" style="
                                        font-size: 19px;
                                    }">
                                    Register
                                    </i>
                                </a>
                            @endif
                                <a href="{{route('authorLogin')}}">
                                    <i class="fa fa-user-circle-o mr-2 ml-1" style="
                                        font-size: 19px;
                                    }">
                                    Login
                                    </i>
                                </a>
                        @endauth
                    @endif
                    </span>
            </div>
        </div>
        <div class="row p-1 d-flex justify-content-center">
            <div class="col-lg-8 d-none d-lg-block">
                <nav class="mainmenu__nav">
                    <ul class="meninmenu d-flex justify-content-start">
                        <li class=""><a href="/">Home</a> </li>
                        
                        <li class="drop">
                            <a href="#"> বিষয় <i class=" ml-1 fa fa-angle-down"></i></a>
                            <div class="megamenu mega03">
                                <ul class="item item03">
                                    @foreach( \App\Models\Category::all() as $category )
                                     <li><a href="{{ route('category',$category->id) }}">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li class="drop">
                            <a href="#"> লেখক <i class=" ml-1 fa fa-angle-down"></i></a>
                            <div class="megamenu mega03">
                                <ul class="item item03">
                                    @foreach( \App\Models\Author::all() as $author )
                                     <li><a href="#">{{ $author->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li class="drop">
                            <a href="#"> প্রকাশনী <i class=" ml-1 fa fa-angle-down"></i></a>
                            <div class="megamenu mega03">
                                <ul class="item item03">
                                    @foreach( \App\Models\Publisher::all() as $publisher )
                                     <li><a href="#">{{ $publisher->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>

                        <li><a href="contact.html">About Us</a></li>
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