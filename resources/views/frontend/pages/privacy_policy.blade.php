@extends('frontend/layouts/master')
@section('title','Privacy Policy')

@section('content')
    @include('frontend/partials/content_top')

    <div class="about_section_aera">
        <div class="container about_container">
            <div class="row no-gutters align-items-center">
                <div class="col-md-12">
                    @foreach($privacy_policies as $privacy_policy)
                        {{-- <h1>{{ $privacy_policy->title }}</h1> --}}
                        <p>
                            {!! $privacy_policy->description !!}
                        </p>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection
