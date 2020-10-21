@extends('frontend/layouts/master')
@section('title','Home')

@section('content')
    <div class="ht__bradcaump__area bg-image--4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Shop</h2>
                        <nav class="bradcaump-content">
                          <a class="breadcrumb_item" href="index.html">Home</a>
                          <span class="brd-separetor">/</span>
                          <span class="breadcrumb_item active">Shop</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
        <section class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab__container">
                            <div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
                                <div class="row">

                                    <!-- Start Single Product -->
                                    <div class="col-md-2">
                                        <div class="product">
                                            <div class="product__thumb">
                                                <a class="first__img" href="single-product.html">
                                                    <img src="{{ asset('frontend_assets/images/1.jpg')}}" alt="product image">
                                                </a>
                                                <a class="second__img animation1" href="single-product.html">
                                                    <img src="{{ asset('frontend_assets/images/2.jpg')}}" alt="product image">
                                                </a>
                                                <div class="new__box">
                                                    <span class="new-label">Hot</span>
                                                </div>
                                                <ul class="prize position__right__bottom d-flex">
                                                    <li>$40.00</li>
                                                    <li class="old_prize">$55.00</li>
                                                </ul>
                                                <div class="action">
                                                    <div class="actions_inner">
                                                        <ul class="add_to_links">
                                                            <li><a class="cart" href="cart.html"></a></li>
                                                            <li><a class="wishlist" href="wishlist.html"></a></li>
                                                            <li><a class="compare" href="compare.html"></a></li>
                                                            <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__content">
                                                <h4><a href="single-product.html">Strive Shoulder Pack</a></h4>
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Start Single Product -->
                                    <div class="col-md-2">
                                        <div class="product">
                                            <div class="product__thumb">
                                                <a class="first__img" href="single-product.html">
                                                    <img src="{{ asset('frontend_assets/images/1.jpg')}}" alt="product image">
                                                </a>
                                                <a class="second__img animation1" href="single-product.html">
                                                    <img src="{{ asset('frontend_assets/images/2.jpg')}}" alt="product image">
                                                </a>
                                                <div class="new__box">
                                                    <span class="new-label">Hot</span>
                                                </div>
                                                <ul class="prize position__right__bottom d-flex">
                                                    <li>$40.00</li>
                                                    <li class="old_prize">$55.00</li>
                                                </ul>
                                                <div class="action">
                                                    <div class="actions_inner">
                                                        <ul class="add_to_links">
                                                            <li><a class="cart" href="cart.html"></a></li>
                                                            <li><a class="wishlist" href="wishlist.html"></a></li>
                                                            <li><a class="compare" href="compare.html"></a></li>
                                                            <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__content">
                                                <h4><a href="single-product.html">Strive Shoulder Pack</a></h4>
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Start Single Product -->
                                    <div class="col-md-2">
                                        <div class="product">
                                            <div class="product__thumb">
                                                <a class="first__img" href="single-product.html">
                                                    <img src="{{ asset('frontend_assets/images/1.jpg')}}" alt="product image">
                                                </a>
                                                <a class="second__img animation1" href="single-product.html">
                                                    <img src="{{ asset('frontend_assets/images/2.jpg')}}" alt="product image">
                                                </a>
                                                <div class="new__box">
                                                    <span class="new-label">Hot</span>
                                                </div>
                                                <ul class="prize position__right__bottom d-flex">
                                                    <li>$40.00</li>
                                                    <li class="old_prize">$55.00</li>
                                                </ul>
                                                <div class="action">
                                                    <div class="actions_inner">
                                                        <ul class="add_to_links">
                                                            <li><a class="cart" href="cart.html"></a></li>
                                                            <li><a class="wishlist" href="wishlist.html"></a></li>
                                                            <li><a class="compare" href="compare.html"></a></li>
                                                            <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__content">
                                                <h4><a href="single-product.html">Strive Shoulder Pack</a></h4>
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Shop Page -->



@endsection
