@extends('frontend/layouts/master')
@section('title','Home')

@section('content')
    <div id="demo" class="carousel slide" data-ride="carousel">
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('frontend_assets/images/4.jpg')}}" alt="Los Angeles" style="height: 400px; width: 100%;">
              <div class="carousel-caption">
                <h3>Los Angeles</h3>
                <p>We had such a great time in LA!</p>
              </div>   
            </div>
            <div class="carousel-item">
              <img src="{{ asset('frontend_assets/images/4.jpg')}}" alt="Chicago" style="height: 400px; width: 100%;">
              <div class="carousel-caption">
                <h3>Chicago</h3>
                <p>Thank you, Chicago!</p>
              </div>   
            </div>
            <div class="carousel-item">
              <img src="{{ asset('frontend_assets/images/4.jpg')}}" alt="New York" style="height: 400px; width: 100%;">
              <div class="carousel-caption">
                <h3>New York</h3>
                <p>We love the Big Apple!</p>
              </div>   
            </div>
          </div>
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>

        <div class="container">
        <div class="row pt-2">
                <div class="col-md-3 d-flex align-items-center border p-2 card">
                    <i class="fa fa-eye pr-2" style="font-size: 50px;"></i>
                    <div class="">
                        <p class="font-weight-bold">Order Processed</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center border p-2 card">
                    <i class="fa fa-eye pr-2" style="font-size: 50px;"></i>
                    <div class="">
                        <p class="font-weight-bold">Order Processed</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center border p-2 card">
                    <i class="fa fa-automobile pr-2" style="font-size: 50px;"></i>
                        <p class="font-weight-bold">Order on way</p>
                </div>
                <div class="col-md-3 d-flex align-items-center border p-2 card">
                    <i class="fa fa-home pr-2" style="font-size: 50px;"></i>
                    <div class="">
                        <p class="font-weight-bold">Order Arrived</p>
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
