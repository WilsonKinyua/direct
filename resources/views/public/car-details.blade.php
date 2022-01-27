@extends('layouts.public.home')
@section('title')
    {{ $inventory->brand_name ?? 'Car Details' }}
@endsection
@section('content')
    <section class="car-details-area ptb-100 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-4">
                    <h1 class="display-4 text-bold">
                        {{ $inventory->brand_name ?? '' }}
                    </h1>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="car-details-gallery">
                        <div class="car-details-main">
                            @if ($inventory->pictures != null)
                                @foreach ($inventory->pictures as $key => $media)
                                    <div class="item">
                                        <img src="{{ $media->getUrl() }}" alt="{{ $inventory->brand_name }}">
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="car-details-preview">
                            @if ($inventory->pictures != null)
                                @foreach ($inventory->pictures as $key => $media)
                                    <div class="item">
                                        <img src="{{ $media->getUrl() }}" alt="{{ $inventory->brand_name }}">
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="car-details-desc">
                        <div class="desc-content">
                            <div class="tag">Ksh. {{ $inventory->price ?? '00' }} </div>
                            <h3>{{ $inventory->brand_name ?? '' }}</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="desc-information">
                                    <h3>LISTING INFORMATION</h3>
                                    <ul class="info-list">
                                        @if ($inventory->milage != null)
                                            <li>Mileage</li>
                                            <li><span>: {{ $inventory->milage }}</span></li>
                                        @endif
                                        @if ($inventory->make != null)
                                            <li>Make</li>
                                            <li><span>: {{ $inventory->make }}</span></li>
                                        @endif
                                        @if ($inventory->model != null)
                                            <li>Model</li>
                                            <li><span>: {{ $inventory->model }}</span></li>
                                        @endif
                                        @if ($inventory->body_type != null)
                                            <li>Body Type</li>
                                            <li><span>: {{ $inventory->body_type }}</span></li>
                                        @endif
                                        @if ($inventory->engine_type != null)
                                            <li>Engine</li>
                                            <li><span>: {{ $inventory->engine_type }}</span></li>
                                        @endif
                                        @if ($inventory->engine_size != null)
                                            <li>Engine Size</li>
                                            <li><span>: {{ $inventory->engine_size }}</span></li>
                                        @endif
                                        @if ($inventory->transmission != null)
                                            <li>Transmission</li>
                                            <li><span>: {{ $inventory->transmission }}</span></li>
                                        @endif
                                        @if ($inventory->fuel != null)
                                            <li>Fuel</li>
                                            <li><span>: {{ $inventory->fuel }}</span></li>
                                        @endif
                                        @if ($inventory->exterior_color != null)
                                            <li>Exterior Color</li>
                                            <li><span>: {{ $inventory->exterior_color }}</span></li>
                                        @endif
                                        @if ($inventory->interior_color != null)
                                            <li>Interior Color</li>
                                            <li><span>: {{ $inventory->interior_color }}</span></li>
                                        @endif
                                        @if ($inventory->no_of_doors != null)
                                            <li>No of Doors</li>
                                            <li><span>: {{ $inventory->no_of_doors }}</span></li>
                                        @endif
                                        @if ($inventory->manufacture_year != null)
                                            <li>Year</li>
                                            <li><span>: {{ $inventory->manufacture_year }}</span></li>
                                        @endif
                                        @if ($inventory->registration_year != null)
                                            <li>Registration Year</li>
                                            <li><span>: {{ $inventory->registration_year }}</span></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="desc-features mt-5 pt-3">
                                    <h3>VEHICLE FEATURES</h3>
                                    <ul class="info-list">
                                        <li><i class="flaticon-tick"></i> Air Conditioning</li>
                                        <li><i class="flaticon-tick"></i> Alarm System</li>
                                        <li><i class="flaticon-tick"></i> AM/FM Radio</li>
                                        <li><i class="flaticon-tick"></i> Bucket Seating</li>
                                        <li><i class="flaticon-tick"></i> Cruise Control</li>
                                        <li><i class="flaticon-tick"></i> Driver Air Bag</li>
                                        <li><i class="flaticon-tick"></i> Integrated Car Phone</li>
                                        <li><i class="flaticon-tick"></i> Auxiliary Heating</li>
                                        <li><i class="flaticon-tick"></i> Bluetooth</li>
                                        <li><i class="flaticon-tick"></i> CD Player</li>
                                        <li><i class="flaticon-tick"></i> Central Locking</li>
                                        <li><i class="flaticon-tick"></i> Side Mirror</li>
                                        <li><i class="flaticon-tick"></i> Panoramic Roof</li>
                                        <li><i class="flaticon-tick"></i> Particulate Filter</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        @if ($inventory->description != null)
                            <div class="desc-notes">
                                <h3 class="text-uppercase">Description</h3>
                                <p>
                                    {!! $inventory->description ?? '' !!}
                                </p>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="desc-seller-info">
                                    <h3>SELLER INFO</h3>
                                    <div class="info-list">
                                        <h4>CHARLES A. ENGLE</h4>
                                        <p>770 Emeral Dreams Drive Grand Ridge, IL 61325</p>
                                    </div>
                                    <div class="info-list">
                                        <h4>EMAIL</h4>
                                        <a href=""><span>email@email.com</span></a>
                                    </div>
                                    <div class="info-list">
                                        <h4>PHONE</h4>
                                        <a href="tel:815-249-4756">815-249-4756</a>
                                    </div>
                                    <div class="info-list">
                                        <h4>WEBSITE</h4>
                                        <a href="#">www.mundauto.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <div class="map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.870619622822!2d39.68260681447532!3d-4.046808946006873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184012f227d1296f%3A0xd7c3bf3a7679513f!2sRatna%20Square%20Shopping%20Centre!5e0!3m2!1sen!2sbd!4v1638947980769!5m2!1sen!2sbd"
                                        style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="car-details-contact">
                        <h3>CONTACT DEALER</h3>
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
                                <label>Your Location </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Your Message</label>
                                <textarea name="message" class="form-control"></textarea>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkme">
                                <label class="form-check-label" for="checkme">Send me price drop & new listing alerts
                                    via email.</label>
                            </div>
                            <button type="submit" class="default-btn">
                                Send Email
                                <span></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
