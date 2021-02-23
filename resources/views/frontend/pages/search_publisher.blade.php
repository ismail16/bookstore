@extends('frontend/layouts/master')
@section('title','All publishers')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4 pt-3" data-aos="fade">
                <h3>লেখকগণ</h3>
                <hr>
                @foreach($Publishers as $publisher)
                <div class="col-md-2 mt-2 mb-2 d-flex justify-content-center">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle" style="height: 100px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRb6RCwDgSHBddwEdd9hkrfRWIDGb7P2ja3uA&usqp=CAU" alt=""> <br>
                        <a href="#" class="text-primary">{{ $publisher->name }}</a>
                    </div> 
                </div>
                @endforeach
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="text-center">
                        {{$Publishers->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
