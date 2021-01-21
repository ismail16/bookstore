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
                                    @foreach( \App\Models\Product::get() as $product)
                                    <!-- Start Single Product -->
                                    <div class="col-md-2 card">
                                        <div class="product">
                                            <div class="product__thumb">
                                                <a class="first__img" href="single-product.html">
                                                    <img src="{{ asset('images/product_image/'.$product->product_image->first()->image) }}" alt="product image">
                                                </a>
                                                <a class="second__img animation1" href="single-product.html">
                                                    <img src="{{ asset('images/product_image/'.$product->product_image->first()->image) }}" alt="product image">
                                                </a>
                                                <div class="new__box">
                                                    <span class="new-label">Hot</span>
                                                </div>
                                                <ul class="prize position__right__bottom d-flex">
                                                    <li>Tk {{ $product->price }}</li>
                                                    <li class="old_prize">{{ $product->old_price }}</li>
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
                                                <h4><a title="Printed Summer Dress" href="{{ route('single.producs',$product->slug) }}">{{ $product->title }}</a></h4>
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <div class="card-footer p-1">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        {{ $product->slug }}
                                                        <a href="{{ route('single.producs', $product->slug) }}" class="btn btn-sm btn-outline-primary btn-block m-1"><i class="fa fa-eye"></i> View</a>
                                                    </div>
                                                    <div class="col-md-6 text-right">
                                                        <form class="" action="{{ route('card.store') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="product_id" value="{{ $product->id  }}">
                                                            <button class="btn btn-sm btn-outline-primary m-1 btn-block w-100"><i class="fa fa-shopping-cart"></i> ADD</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
