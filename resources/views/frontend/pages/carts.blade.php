@extends('frontend/layouts/master')
@section('title','Cards')

@section('content')
    @include('frontend/partials/content_top')

    <style type="text/css">
        .border_bottom{
            border-bottom: 1px solid #ededed;
        }
    </style>

    <div class="shopping_cart_details">

        <div class="container">
            <div class="row">
                @if(session()->has('success'))
                    <div class="col-lg-12 col-xl-12 d-flex justify-content-center session_message">
                        <div class="alert alert-success text-center pr-3 pl-3 p-1 mb-1">
                            {{session('success')}}
                            <button type="button" class="close ml-4" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="col-lg-12 col-xl-12 d-flex justify-content-center session_message">
                        <div class="alert alert-success text-center pr-3 pl-3 p-1 mb-1">
                            {{session('error')}}
                            <button type="button" class="close ml-4" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif
                <div class="col-12">
                    <div class="table_desc">
                        @php
                           $cards =  App\Models\Cart::totalCarts();
                            $totalAmount = 0;
                        @endphp
                        @if(count($cards) > 0)
                        <div class="">
                            <div class="cart_page">
                                <div class="table-responsive">
                                    <table class="table _table-bordered">
                                      <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>Delete</th>
                                          <th width="450">Product</th>
                                          <th>Image</th>
                                          <th>Price</th>
                                          <th>Quantity</th>
                                          <th>Total</th>
                                        </tr>
                                      </thead>
                                      <tbody>

                                        @foreach($cards as $cart)
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <button class="btn btn-danger" onclick="delete_cart({{$cart->id}})"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                            <td>
                                                <a href="#">{{ $cart->product->title }}</a>
                                            </td>
                                            <td><a href="#"><img src="{{ asset('images/product_image/'.$cart->product->product_image->first()->image) }}" height="50" alt=""></a></td>
                                            <td><b>Tk {{ $cart->product->price }}</b></td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="number" min="1" name="product_quantity" class="form-control product_quantity_{{$cart->id}}" value="{{ $cart->product_quantity }}" style="width: 50px;" />
                                                    <button class="btn btn-info btn-md ml-2" onclick="update_product_qnt({{$cart->id}},{{$cart->product_quantity}})"><i class="fa fa-refresh"></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <b> {{ $cart->product->price * $cart->product_quantity }} Tk</b>
                                            </td>
                                        </tr>

                                        @php  $totalAmount += $cart->product->price * $cart->product_quantity @endphp
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row pr-2">
                            <div class="col-lg-6 col-md-6">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="row">
                                    <div class="col-8">
                                        <b>Subtotal</b>
                                    </div>
                                    <div class="col-4 text-center">
                                        <b>{{ $totalAmount }} Tk</b>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 border_bottom">
                                        <b>Shipping</b>
                                    </div>
                                    <div class="col-4 border_bottom text-center">
                                       <b>100 Tk</b>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 border_bottom">
                                        <b>Discount</b>
                                    </div>
                                    <div class="col-4 border_bottom text-center">
                                        <b>- 100 Tk</b>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <b>Total</b>
                                    </div>
                                    <div class="col-4 text-center">
                                        <b>{{ $totalAmount }} Tk</b>
                                    </div>
                                </div>
                                <div class="row mb-4 mt-2">
                                    <div class="col-6">
                                        <div class="coupon_code_inner">
                                            <input class="form-control-sm" placeholder="Enter Coupon code" type="text">
                                            <button type="submit" class="btn btn-sm btn-outline-info">Apply coupon</button>
                                        </div>
                                    </div>
                                    <div class="col-6 text-center">
                                        <a class="btn btn-sm btn-outline-info" href="{{ route('checkout.index') }}">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                           <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center alert alert-warning alert-dismissible fade show p-4 m-4">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <h3><strong>Opps!</strong> Cart is Emty !!</h3>
                                    </div>
                                </div>
                           </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var token = '{{ csrf_token() }}'
        function update_product_qnt(id) {
            var product_quantity =$('.product_quantity_'+id)[0].valueAsNumber
            var url = "{{ url('cards/update/') }}"+'/'+id
            console.log(url)
            $.ajax({
                url: url,
                type: 'POST',
                data: {_token: token, id: id, product_quantity: product_quantity},
                success: function(data){
                    console.log(data.product_quantity);
                    window.location="{{ url('cards') }}"
                }
            });
        }

        function delete_cart(id) {
            var url = "{{ url('cards/delete/') }}"+'/'+id
            console.log(url)
            $.ajax({
                url: url,
                type: 'get',
                // data: {id: id},
                success: function(data){
                    console.log(data);
                    window.location="{{ url('cards') }}"
                }
            });
        }
    </script>
@endpush
