@extends('layouts.public.home')
@section('title')
    {{ $showroom->name }}
@endsection
@section('content')

    <section class="user-profile-area pt-100 pb-100 mt-5">
        <div class="container">
            <div class="section-title">
                <!-- <h2 class="text-uppercase">LOTA AUTOMOTIVE LIMITED</h2>
                                            <p>Look at the best showrooms</p> -->
                <div class="row">
                    <div class="col-lg-8 col-md-12"></div>
                    <div class="col-lg-4 col-md-6">
                        <div class="section-btn widget-area">
                            <div class="widget widget_search vehicle-search">
                                <form class="search-form">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search...">
                                    </label>
                                    <button type="submit">
                                        <i class='bx bx-search-alt'></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="user-profile-information">
                        <div class="profile-title">
                            @if ($showroom->logo)
                                <img src="{{ $showroom->logo->getUrl() }}" alt="{{ $showroom->name ?? '' }}">
                            @else
                                <img src="{{ asset('images/no-image.jpg') }}" alt="{{ $showroom->name ?? '' }}">
                            @endif

                            <h3>{{ $showroom->name ?? '' }}</h3>
                            <span><b><i class="fa fa-map-marker-alt"></i></b> {{ $showroom->location ?? '' }}</span>
                        </div>
                        <p>
                            {!! $showroom->description ?? '' !!}
                        </p>
                        <ul class="profile-info">
                            <li>
                                <span>EMAIL</span>
                                <a href="malto:{{ $showroom->email ?? '' }}"><span
                                        class="__cf_email__">{{ $showroom->email ?? '' }}</span></a>
                            </li>
                            <li>
                                <span>PHONE</span>
                                <a
                                    href="tel:{{ $showroom->phone_number ?? '' }}">{{ $showroom->phone_number ?? '' }}</a>
                            </li>
                            <li>
                                <span>WEBSITE</span>
                                <a target="_blank"
                                    href="{{ $showroom->web_url ?? 'https://direct.co.ke/' }}">{{ $showroom->web_url ?? 'https://direct.co.ke/' }}</a>
                            </li>
                        </ul>
                        <div class="profile-contact">
                            <form>
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Your Email</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Your Phone</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Your Message</label>
                                    <textarea name="message" class="form-control"></textarea>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkme">
                                    <label class="form-check-label" for="checkme">
                                        Accept <a href="terms-of-service.html">Terms of Services</a> and <a
                                            href="privacy-policy.html">Privacy Policy</a>
                                    </label>
                                </div>
                                <button type="submit" class="default-btn">
                                    Send Message
                                    <span></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <h2 class="text-uppercase mb-3">{{ $showroom->name ?? '' }}</h2>
                    <div class="row">
                        @foreach ($inventories as $inventory)
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-car-ranking text-center">
                                    <div class="car-ranking-image">
                                        <a href="{{ route('vehicle.details', $inventory->slug) }}">
                                            @if ($inventory->pictures != null)
                                                @foreach ($inventory->pictures->take(1) as $key => $media)
                                                    <img src="{{ $media->getUrl() }}"
                                                        alt="{{ $inventory->brand_name ?? '' }}">
                                                @endforeach
                                            @endif
                                        </a>
                                    </div>
                                    <div class="car-ranking-content">
                                        <a href="{{ route('vehicle.details', $inventory->slug) }}">
                                            <p class="text-bold">
                                                <h5>{{ $inventory->brand_name ?? '' }}</h5>
                                            </p>
                                            <div class="d-flex justify-content-center">
                                                <div class="">
                                                    <h5 class="text-danger">Ksh. {{ number_format($inventory->price ?? '00') }}</h5>
                                                </div>
                                            </div>
                                            <p class="mt-1 text-capitalize">
                                                <small>
                                                    <i class="fa fa-map"></i>
                                                    {{ $inventory->showroom->location ?? '' }}
                                                </small>
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <p class="text-capitalize">
                                                        <small>
                                                            <i class="fa fa-map-marker-alt"></i>
                                                            {{ $inventory->showroom->location ?? '' }}
                                                        </small>
                                                    </p>
                                                </div>
                                                <div>
                                                    <p style="margin-left: 10px">
                                                        <small>
                                                            <i class="fa fa-phone"></i>
                                                            {{ $inventory->showroom->phone_number ?? '' }}
                                                        </small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
