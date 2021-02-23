@php
    $setting = \App\Models\Setting::orderBy('id', 'desc')->first();
@endphp
<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
    <div class="footer-static-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-left">
                    <img src="{{ asset('images/store_logo/'.$setting->store_logo) }}" alt="boibazar-logo-bn" width="50%"><br>
                    <ul>
                        <li>
                            <i class="fa fa-headphones"></i> 
                            {{ $setting->store_phone }}<span style="font-size:10px;">(Hotline)</span>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                        <span data-toggle="tooltip" title="">Corporate Sales</span>
                        </li>
                        <li>
                             <i class="fa fa-envelope"></i>
                        {{ $setting->store_email }}
                        </li>
                        <li>
                            <i class="fa fa-address-card"></i>
                        {{ $setting->store_address }}
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 text-left">
                    <h4>Explore By</h4><br>
                    <ul>
                        <li><a href="{{ route('categories')}}" class="text-muted">Categories</a></li>
                        <li><a href="{{ route('author')}}" class="text-muted">Author</a></li>
                        <li><a href="{{ route('publisher')}}" class="text-muted"> Publisher</a></li>
                    </ul>
                </div>
                <div class="col-md-2 text-left">
                    <h4>Get To Know Us</h4><br>
                    <ul>
                        <li><a href="{{ route('contact')}}" class="text-muted">Contact Us</a></li>
                        <li><a href="{{ route('about')}}" class="text-muted">About Us</a></li>
                        <li><a href="#" target="_blank" class="text-muted"> Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-2 text-left">

                    <h4>Policy</h4><br>

                    <ul>
                        <li><a href="{{ route('terms.conditions')}}" class="text-muted">Terms &amp; Conditions</a></li>
                        <li><a href="{{ route('privacy_policy')}}" class="text-muted">Private Policy</a></li>
                    </ul>
                </div>

                <div class="col-md-3 text-left">


                <h4>Stay Connected With Us</h4><br>
                <div class="row">
                    @isset($setting->facebook)
                    <div class="col-md-2">
                        <a href="{{$setting->facebook}}" target="_blank" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
                    </div>
                    @endisset
                    @isset($setting->instagram)
                    <div class="col-md-2">
                        <a href="{{ $setting->instagram }}" class="icoTwitter" target="_blank" title="Twitter"><i class="fa fa-instagram"></i></a>
                    </div>
                    @endisset
                    @isset($setting->youtube)
                    <div class="col-md-2">
                        <a href="{{ $setting->youtube }}" class="icoTwitter" target="_blank" title="Twitter"><i class="fa fa-youtube-play"></i></a>
                    </div>
                    @endisset
                    @isset($setting->twitter)
                    <div class="col-md-2">
                        <a href="{{ $setting->twitter }}" class="icoTwitter" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>
                    </div>
                    @endisset
                    @isset($setting->linkedIn)
                    <div class="col-md-2">
                        <a href="{{ $setting->linkedIn }}" class="icoLinkedin" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>
                    @endisset
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright__wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="copyright">
                        <div class="copy__right__inner text-left">
                            <p>Copyright <i class="fa fa-copyright"></i> <a href="{{ route('index') }}">{{ $setting->store_name }}</a> All Rights Reserved</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="payment text-right">
                        <img src="images/icons/payment.png" alt="" />
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</footer>
</div>
    <script src="{{ asset('frontend_assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('frontend_assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('frontend_assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend_assets/js/plugins.js')}}"></script>
    <script src="{{ asset('frontend_assets/js/active.js')}}"></script>
     @stack('scripts')
</body>
</html>