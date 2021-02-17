@php
    $setting = \App\Models\Setting::orderBy('id', 'desc')->first();
@endphp
<header id="_wn__header" class="_oth-page _header__area _header__absolute sticky__header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 pl-0 pr-0" _style="z-index: 9999999999">
                <div class="logo">
                    <a href="/">
                        <img src="{{ asset('images/store_logo/'.$setting->store_logo) }}" alt="logo images" class="p-1">
                    </a>
                </div>
            </div>
            <div class="col-md-6  pl-0 pr-0 d-flex align-items-center">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <select class="form-control w-100 rounded-0">
                            <option value="বিষয়">বই</option>
                            <option value="লেখক">লেখক</option>
                            <option value="প্রকাশনী">প্রকাশনী</option>
                        </select>    
                    </div>
                    <input type="text" name="title_or_keyword" class="form-control" placeholder="Search for books">
                    <div class="input-group-append">
                        <input type="submit" value="Search" name="search" class="btn btn-primary rounded-0">
                    </div>
                </div>
            </div>

            <div class="col-md-3 d-flex justify-content-center  d-flex align-items-center" style="z-index: 9999999999">
                <span class="mobile_menu">
                   <a href="{{ route('cart.index')}}">
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

                    <div class="dropdown float-right ml-2">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                          Account
                        </button>
                        <div class="dropdown-menu">

                            @if (Route::has('login'))
                        @auth
                            @if(Auth::user()->role->id == 1)

                            <a href="{{route('admin.dashboard')}}" class="dropdown-item">
                                    <i class="fa fa-user-circle-o">
                                    Dashboard
                                    </i>
                                </a>

                            @elseif(Auth::user()->role->id == 2)

                            <a href="{{route('author.dashboard')}}" class="dropdown-item">
                                    <i class="fa fa-user-circle-o">
                                    Dashboard
                                    </i>
                                </a>
                            @endif

                            <a href="{{ route('logout') }}" title="Logout" class="dropdown-item text-danger"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-key" title="Logout"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            @if (Route::has('register'))
                                <a href="{{route('authorRegister')}}" class="text-dark dropdown-item">
                                    <i class="fa fa-user-circle-o">
                                    Register
                                    </i>
                                </a>
                            @endif
                                <a href="{{route('authorLogin')}}" class="dropdown-item">
                                    <i class="fa fa-user-circle-o">
                                    Login
                                    </i>
                                </a>
                        @endauth
                    @endif
                        </div>
                      </div>
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

                        <li><a href="{{ route('about')}}">About Us</a></li>
                        <li><a href="{{ route('contact')}}">Contact</a></li>
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
                            <a href="">Home</a>
                        </li>
                        <li><a href="#">বিষয়</a>
                            <ul>
                                @foreach( \App\Models\Category::all() as $category )
                                    <li><a href="{{ route('category',$category->id) }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="#">লেখক</a>
                            <ul>
                                @foreach( \App\Models\Author::all() as $author )
                                    <li><a href="#">{{ $author->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="#">প্রকাশনী</a>
                            <ul>
                                @foreach( \App\Models\Publisher::all() as $publisher )
                                    <li><a href="#">{{ $publisher->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li><a href="{{ route('about')}}">About us</a></li>
                        <li><a href="{{ route('contact')}}">Contact</a></li>
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