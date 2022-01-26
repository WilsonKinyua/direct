@extends('layouts.public.home')
@section('title')
    Local Stock
@endsection
@section('content')


<section class="car-ranking-area bg-ffffff pt-100 pb-70 mt-5">
    <div class="container">
        <div class="section-title">
            <h2 class="text-uppercase">All Vehicles</h2>
            <p>Look at the best cars on our listing</p>
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
            <div class="col-lg-3 col-sm-6">
                <div class="single-car-ranking">
                    <div class="car-ranking-image">
                        <a href="car-details.html"><img src="images/car-ranking/car-ranking-1.jpg"
                                alt="image"></a>
                        <div class="icon">
                            <a href="car-details.html">
                                <i class="flaticon-gallery"> 5</i>
                            </a>
                        </div>
                    </div>
                    <div class="car-ranking-content">
                        <div class="tag">Ksh. 2,510,000</div>
                        <h3>
                            <a href="car-details.html">2021 MAZDA CX-30</a>
                        </h3>
                        <p><b>MILEAGES</b> 3 Miles, Orland Park</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-car-ranking">
                    <div class="car-ranking-image">
                        <a href="car-details.html"><img src="images/car-ranking/car-ranking-2.jpg"
                                alt="image"></a>
                        <div class="icon">
                            <a href="car-details.html">
                                <i class="flaticon-gallery"> 3</i>
                            </a>
                        </div>
                    </div>
                    <div class="car-ranking-content">
                        <div class="tag">Ksh. 4,910,000</div>
                        <h3>
                            <a href="car-details.html">2021 SUBARU XC-60</a>
                        </h3>
                        <p><b>MILEAGES</b> 7 Miles, Blauvelt, NY</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-car-ranking">
                    <div class="car-ranking-image">
                        <a href="car-details.html"><img src="images/car-ranking/car-ranking-3.jpg"
                                alt="image"></a>
                        <div class="icon">
                            <a href="car-details.html">
                                <i class="flaticon-gallery"> 4</i>
                            </a>
                        </div>
                    </div>
                    <div class="car-ranking-content">
                        <div class="tag">Ksh. 5,510,000</div>
                        <h3>
                            <a href="car-details.html">2021 NISSAN XX-50</a>
                        </h3>
                        <p><b>MILEAGES</b> 2 Miles, Blauvelt, NY</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-car-ranking">
                    <div class="car-ranking-image">
                        <a href="car-details.html"><img src="images/car-ranking/car-ranking-4.jpg"
                                alt="image"></a>
                        <div class="icon">
                            <a href="car-details.html">
                                <i class="flaticon-gallery"> 2</i>
                            </a>
                        </div>
                    </div>
                    <div class="car-ranking-content">
                        <div class="tag">Ksh. 7,510,000</div>
                        <h3>
                            <a href="car-details.html">2021 KIA SOUL XC 60</a>
                        </h3>
                        <p><b>MILEAGES</b> 9 Miles, Bardonia</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-car-ranking">
                    <div class="car-ranking-image">
                        <a href="car-details.html"><img src="images/car-ranking/car-ranking-4.jpg"
                                alt="image"></a>
                        <div class="icon">
                            <a href="car-details.html">
                                <i class="flaticon-gallery"> 2</i>
                            </a>
                        </div>
                    </div>
                    <div class="car-ranking-content">
                        <div class="tag">Ksh. 7,510,000</div>
                        <h3>
                            <a href="car-details.html">2021 KIA SOUL XC 60</a>
                        </h3>
                        <p><b>MILEAGES</b> 9 Miles, Bardonia</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-car-ranking">
                    <div class="car-ranking-image">
                        <a href="car-details.html"><img src="images/car-ranking/car-ranking-4.jpg"
                                alt="image"></a>
                        <div class="icon">
                            <a href="car-details.html">
                                <i class="flaticon-gallery"> 2</i>
                            </a>
                        </div>
                    </div>
                    <div class="car-ranking-content">
                        <div class="tag">Ksh. 7,510,000</div>
                        <h3>
                            <a href="car-details.html">2021 KIA SOUL XC 60</a>
                        </h3>
                        <p><b>MILEAGES</b> 9 Miles, Bardonia</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-car-ranking">
                    <div class="car-ranking-image">
                        <a href="car-details.html"><img src="images/car-ranking/car-ranking-4.jpg"
                                alt="image"></a>
                        <div class="icon">
                            <a href="car-details.html">
                                <i class="flaticon-gallery"> 2</i>
                            </a>
                        </div>
                    </div>
                    <div class="car-ranking-content">
                        <div class="tag">Ksh. 7,510,000</div>
                        <h3>
                            <a href="car-details.html">2021 KIA SOUL XC 60</a>
                        </h3>
                        <p><b>MILEAGES</b> 9 Miles, Bardonia</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-car-ranking">
                    <div class="car-ranking-image">
                        <a href="car-details.html"><img src="images/car-ranking/car-ranking-4.jpg"
                                alt="image"></a>
                        <div class="icon">
                            <a href="car-details.html">
                                <i class="flaticon-gallery"> 2</i>
                            </a>
                        </div>
                    </div>
                    <div class="car-ranking-content">
                        <div class="tag">Ksh. 7,510,000</div>
                        <h3>
                            <a href="car-details.html">2021 KIA SOUL XC 60</a>
                        </h3>
                        <p><b>MILEAGES</b> 9 Miles, Bardonia</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-car-ranking">
                    <div class="car-ranking-image">
                        <a href="car-details.html"><img src="images/car-ranking/car-ranking-4.jpg"
                                alt="image"></a>
                        <div class="icon">
                            <a href="car-details.html">
                                <i class="flaticon-gallery"> 2</i>
                            </a>
                        </div>
                    </div>
                    <div class="car-ranking-content">
                        <div class="tag">Ksh. 7,510,000</div>
                        <h3>
                            <a href="car-details.html">2021 KIA SOUL XC 60</a>
                        </h3>
                        <p><b>MILEAGES</b> 9 Miles, Bardonia</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-car-ranking">
                    <div class="car-ranking-image">
                        <a href="car-details.html"><img src="images/car-ranking/car-ranking-4.jpg"
                                alt="image"></a>
                        <div class="icon">
                            <a href="car-details.html">
                                <i class="flaticon-gallery"> 2</i>
                            </a>
                        </div>
                    </div>
                    <div class="car-ranking-content">
                        <div class="tag">Ksh. 7,510,000</div>
                        <h3>
                            <a href="car-details.html">2021 KIA SOUL XC 60</a>
                        </h3>
                        <p><b>MILEAGES</b> 9 Miles, Bardonia</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-car-ranking">
                    <div class="car-ranking-image">
                        <a href="car-details.html"><img src="images/car-ranking/car-ranking-4.jpg"
                                alt="image"></a>
                        <div class="icon">
                            <a href="car-details.html">
                                <i class="flaticon-gallery"> 2</i>
                            </a>
                        </div>
                    </div>
                    <div class="car-ranking-content">
                        <div class="tag">Ksh. 7,510,000</div>
                        <h3>
                            <a href="car-details.html">2021 KIA SOUL XC 60</a>
                        </h3>
                        <p><b>MILEAGES</b> 9 Miles, Bardonia</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-car-ranking">
                    <div class="car-ranking-image">
                        <a href="car-details.html"><img src="images/car-ranking/car-ranking-4.jpg"
                                alt="image"></a>
                        <div class="icon">
                            <a href="car-details.html">
                                <i class="flaticon-gallery"> 2</i>
                            </a>
                        </div>
                    </div>
                    <div class="car-ranking-content">
                        <div class="tag">Ksh. 7,510,000</div>
                        <h3>
                            <a href="car-details.html">2021 KIA SOUL XC 60</a>
                        </h3>
                        <p><b>MILEAGES</b> 9 Miles, Bardonia</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <a href="#" class="prev page-numbers">
                        <i class='flaticon-left-arrow'></i>
                    </a>
                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="#" class="page-numbers">2</a>
                    <a href="#" class="page-numbers">3</a>
                    <a href="#" class="next page-numbers">
                        <i class='flaticon-right-arrow'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
