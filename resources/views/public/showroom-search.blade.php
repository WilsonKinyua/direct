@extends('layouts.public.home')
@section('title')
    Showroom List
@endsection
@section('content')
    <section class="car-ranking-area bg-ffffff pt-100 pb-70 mt-5">
        <div class="container">
            <div class="row m-5">
                <div class="col-md-12 text-center">
                    <h3>{{ count($showrooms) }} Search Results Found for: <span
                            class="text-danger">{{ $query }}</span></h3>
                </div>
            </div>
            <div class="section-title">
                <h2 class="text-uppercase">SHOWROOMS Found</h2>
                <div class="section-btn widget-area">
                    <div class="widget widget_search vehicle-search">
                        <form action="{{ route('search.query-showroom') }}" method="POST" class="search-form">
                            @csrf
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" placeholder="Search..." name="search"
                                    value="{{ $query ?? '' }}">
                            </label>
                            <button type="submit">
                                <i class='bx bx-search-alt'></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                @if (count($showrooms) > 0)
                    @foreach ($showrooms as $showroom)
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-car-ranking">
                                <div class="car-ranking-image">
                                    <a href="{{ route('showroom.details', $showroom->slug) }}">
                                        @if ($showroom->logo)
                                            <img src="{{ $showroom->logo->getUrl() }}"
                                                alt="{{ $showroom->name ?? '' }}">
                                        @else
                                            <img src="{{ asset('images/no-image.jpg') }}"
                                                alt="{{ $showroom->name ?? '' }}">
                                        @endif
                                    </a>
                                    <div class="icon verified-icon">
                                        <a href="{{ route('showroom.details', $showroom->slug) }}">
                                            <i class="fa fa-badge-check"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="car-ranking-content">
                                    <h4>
                                        <a
                                            href="{{ route('showroom.details', $showroom->slug) }}">{{ $showroom->name ?? '' }}</a>
                                    </h4>
                                    <p><b><i class="fa fa-map-marker-alt"></i></b> {{ $showroom->location ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-12 mt-5">
                        <div class="alert alert-danger">
                            <h4>No Showrooms Found!</h4>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

@endsection
