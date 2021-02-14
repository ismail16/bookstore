@extends('frontend/layouts/master')
@section('title','Contact us')

@section('content')
@include('frontend/partials/content_top')
@php
    $setting = \App\Models\Setting::orderBy('id', 'desc')->first();
@endphp
<section class="wn_contact_area bg--white pt-2 pb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="contact-form-wrap">
                    <h2 class="contact__title">Get in touch</h2>
                    <form id="contact-form" method="POST" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 mb-1">
                            <label class="mb-0">Name <span class="text-danger">*</span></label>
                            <input class="form-control" name="name" placeholder="Name" type="text" required>
                        </div>
                        <div class="col-lg-6 mb-1">
                             <label class="mb-0">Email <span class="text-danger">*</span></label>
                            <input class="form-control" name="email" placeholder="Email" type="email">
                        </div>
                        <div class="col-lg-6 mb-1">
                            <label class="mb-0">Subject <span class="text-danger">*</span></label>
                            <input class="form-control" name="subject" placeholder="Subject" type="text">
                        </div>
                        <div class="col-lg-6 mb-1">
                             <label class="mb-0">Phone <span class="text-danger">*</span></label>
                            <input class="form-control" name="phone" placeholder="Phone" type="text">
                        </div>

                        <div class="col-12 mb-1">
                             <label class="mb-0">Message <span class="text-danger">*</span></label>
                            <div class="contact_textarea">
                                <textarea placeholder="Message" name="message" class="form-control" required></textarea>
                            </div>
                            <div class="contact-btn mt-2">
                                <button type="submit">Send Message</button>
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </form>
                </div>
                <div class="form-output">
                    <p class="form-messege">
                </p></div>
            </div>
            <div class="col-lg-4 col-12 md-mt-40 sm-mt-40">
                <div class="wn__address">
                    <h2 class="contact__title">Get office info.</h2>
                    <div class="wn__addres__wreapper">
                        <div class="single__address">
                            <i class="fa fa-map-marker"></i>
                            <div class="content">
                                <span>address:</span>
                                <p>{{ $setting->store_address }}</p>
                            </div>
                        </div>

                        <div class="single__address">
                            <i class="fa fa-phone   "></i>
                            <div class="content">
                                <span>Phone Number:</span>
                                <p>{{ $setting->store_phone }}</p>
                            </div>
                        </div>

                        <div class="single__address">
                            <i class="fa fa-envelope"></i>
                            <div class="content">
                                <span>Email address:</span>
                                <p>{{ $setting->store_email }}</p>
                            </div>
                        </div>

                        <div class="single__address">
                            <i class="fa fa-globe"></i>
                            <div class="content">
                                <span>website address:</span>
                                <p>{{ $setting->store_website }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
