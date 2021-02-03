@extends('frontend/layouts/master')
@section('title','About us')

@section('content')
    @include('frontend/partials/content_top')

    <div class="page-about about_area bg--white section-padding--lg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        @foreach($abouts as $about)
                        <div class="_content">
                            <h2>{{ $about->title}}</h2>
                            <p class="mt--20 mb--20">
                                {!! $about->description !!}
                            </p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
@endsection
