@extends('frontend/layouts/master')
@section('title','products By Category')

@section('content')   
@include('frontend/partials/content_top')    
<section class="page-shop-sidebar pt-4 left--sidebar bg--white section-padding--lg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tab__container">
                    <div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
                        <h2 class="contact__title">Products By Category</h2>
                        <div class="row">
                            @foreach( \App\Models\Product::get() as $product)
                            <!-- Start Single Product -->
                            <div class="col-md-2 card">
                                <div class="product">
                                    <div class="product__thumb">
                                        <a class="first__img" href="{{ route('single.producs',$product->slug) }}">
                                            <img class="product_img" src="{{ asset('images/product_image/'.$product->product_image->first()->image) }}" alt="product image">
                                        </a>
                                        <!-- <a class="second__img animation1" href="{{ route('single.producs',$product->slug) }}">
                                            <img src="{{ asset('images/product_image/'.$product->product_image->first()->image) }}" alt="product image">
                                        </a> -->
                                       <!--  <div class="new__box">
                                            <span class="new-label">Hot</span>
                                        </div> -->
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
                                        <h4><a title="{{ $product->title }}" href="{{ route('single.producs',$product->slug) }}">{{ $product->title }}</a></h4>
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
