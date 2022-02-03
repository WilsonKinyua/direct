@extends('layouts.public.home')
@section('title')
    Local Stock
@endsection
@section('content')
    <section class="car-ranking-area bg-ffffff pt-100 pb-70 mt-5">
        <div class="container">
            <div class="row m-5">
                <div class="col-md-12 text-center">
                    <h3><span class="text-danger">{{ count($inventories) }}</span> Search Results Found!</h3>
                </div>
            </div>
            <div class="section-title">
                <h2 class="text-uppercase">Vehicles Found</h2>
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
            <div class="row">
                @if (count($inventories) > 0)
                    @foreach ($inventories as $inventory)
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-car-ranking">
                                <div class="car-ranking-image">
                                    @if ($inventory->pictures != null)
                                        <a href="{{ route('vehicle.details', $inventory->slug) }}">
                                            @foreach ($inventory->pictures->take(1) as $key => $media)
                                                <img src="{{ $media->getUrl() }}"
                                                    alt="{{ $inventory->brand_name ?? '' }}">
                                            @endforeach
                                        </a>
                                        <div class="icon">
                                            <a href="{{ route('vehicle.details', $inventory->slug) }}">
                                                <i class="flaticon-gallery"> {{ count($inventory->pictures) }}</i>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                                <div class="car-ranking-content">
                                    <div class="tag">Ksh. {{ number_format($inventory->price ?? '00') }}</div>
                                    <h3>
                                        <a
                                            href="{{ route('vehicle.details', $inventory->slug) }}">{{ $inventory->brand_name ?? '' }}</a>
                                    </h3>
                                    <p><b>MILEAGES</b> {{ $inventory->milage ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-12 mt-4">
                        <div class="alert alert-danger">
                            <h4>No results found!</h4>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

@endsection
