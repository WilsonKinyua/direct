@extends('layouts.public.home')
@section('title')
Welcome to Direct.co.ke - Homepage
@endsection
@section('content')
    <div class="main-banner-with-category">
        <div class="main-banner-item">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="main-banner-content">
                            <h1 class="d-none">Find The Right Vehicle</h1>

                            <h1 class="typewrite" data-period="2000"
                                data-type='["Direct Showrooms", "Find The Right Vehicle", "Find dealers close to you!" ]'>
                                <span class="wrap"></span>
                            </h1>
                            <div class="tab banner-category-list-tab">
                                <ul class="tabs">
                                    <li>
                                        <a href="#">Quick Search</a>
                                    </li>
                                    <li>
                                        <a href="#">Find Showrooms</a>
                                    </li>
                                </ul>
                                <div class="tab_content">
                                    <div class="tabs_item">
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <select>
                                                            <option>Year</option>
                                                            <option>2020</option>
                                                            <option>2021</option>
                                                            <option>2022</option>
                                                            <option>2023</option>
                                                            <option>2024</option>
                                                            <option>2025</option>
                                                            <option>2026</option>
                                                            <option>2027</option>
                                                            <option>2028</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <select>
                                                            <option>Models</option>
                                                            <option>Sedan</option>
                                                            <option>MPV</option>
                                                            <option>SUV</option>
                                                            <option>Crossover</option>
                                                            <option>Coupe</option>
                                                            <option>Convertible</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                                                    <div class="form-group">
                                                        <select>
                                                            <option>Max Price</option>
                                                            <option>Ksh. 1,010,000</option>
                                                            <option>Ksh. 3,010,000</option>
                                                            <option>Ksh. 4,010,000</option>
                                                            <option>Ksh. 5,010,000</option>
                                                            <option>Ksh. 8,010,000</option>
                                                            <option>Ksh. 1,2105,000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="main-search-btn">
                                                <button type="submit"><i class='bx bx-search-alt'></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tabs_item">
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-6">
                                                    <div class="form-group showrooms-search">
                                                        <input type="text" class="form-control" name="showrooms-search"
                                                            placeholder="Search by name or location..." autofocus="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="main-search-btn">
                                                <button type="submit"><i class='bx bx-search-alt'></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="advanced-search">
                                        <a href="#">Advanced Search</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner-category-list">
                                <div class="list">
                                    <div class="icon">
                                        <a href="#"><i class="flaticon-car"></i></a>
                                    </div>
                                    <h3><a href="#">Pickups</a></h3>
                                    <span>(30)</span>
                                </div>
                                <div class="list">
                                    <div class="icon">
                                        <a href="#"><i class="flaticon-minivan"></i></a>
                                    </div>
                                    <h3><a href="#">Minivans</a></h3>
                                    <span>(15)</span>
                                </div>
                                <div class="list">
                                    <div class="icon">
                                        <a href="#"><i class="flaticon-sedan"></i></a>
                                    </div>
                                    <h3><a href="#">Sedans</a></h3>
                                    <span>(20)</span>
                                </div>
                                <div class="list">
                                    <div class="icon">
                                        <a href="#"><i class="flaticon-hatchback"></i></a>
                                    </div>
                                    <h3><a href="#">Hatchbacks</a></h3>
                                    <span>(07)</span>
                                </div>
                                <div class="list">
                                    <div class="icon">
                                        <a href="#"><i class="flaticon-suv-car"></i></a>
                                    </div>
                                    <h3><a href="#">SUVs</a></h3>
                                    <span>(26)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
    <section class="car-ranking-area bg-ffffff pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>FEATURED SHOWROOMS</h2>
                <p>Look at the best cars in the ranking</p>
                <div class="section-btn">
                    <a href="#" class="default-btn">
                        View All
                        <span></span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-car-ranking">
                        <div class="car-ranking-image">
                            <a href="showrooms-details.html"><img src="images/showrooms/1.png" alt="image"></a>
                            <div class="icon verified-icon">
                                <a href="showrooms-details.html">
                                    <i class="fa fa-badge-check"></i>
                                </a>
                            </div>
                        </div>
                        <div class="car-ranking-content">
                            <h4>
                                <a href="showrooms-details.html">LOTA AUTOMOTIVE LIMITED</a>
                            </h4>
                            <p><b><i class="fa fa-map-marker-alt"></i></b> Fourth Parklands Ave, Nairobi Kenya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="featured-cars-area bg-161c2d pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>FEATURED CARS</h2>
                <p>Find the best car of your choice</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-featured-cars-box">
                        <div class="box-image">
                            <a href="car-details.html"><img src="images/featured-cars/featured-cars-7.jpg"
                                    alt="image"></a>
                            <div class="icon">
                                <a href="car-details.html">
                                    <i class="flaticon-gallery"> 5</i>
                                </a>
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="tag">Ksh. 3,010,000</div>
                            <h3>
                                <a href="car-details.html">2021 VOLVO XC60</a>
                            </h3>
                            <p><b>MILEAGES</b> 4 Miles, Orland Park</p>
                        </div>
                    </div>
                    <div class="single-featured-cars-box">
                        <div class="box-image">
                            <a href="car-details.html"><img src="images/featured-cars/featured-cars-8.jpg"
                                    alt="image"></a>
                            <div class="icon">
                                <a href="car-details.html">
                                    <i class="flaticon-gallery"> 4</i>
                                </a>
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="tag">Ksh. 5,510,000</div>
                            <h3>
                                <a href="car-details.html">2021 TOYOTA RAV4</a>
                            </h3>
                            <p><b>MILEAGES</b> 5 Miles, Orland Park</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-featured-cars-box">
                        <div class="box-image">
                            <a href="car-details.html"><img src="images/featured-cars/featured-cars-9.jpg"
                                    alt="image"></a>
                            <div class="icon">
                                <a href="car-details.html">
                                    <i class="flaticon-gallery"> 6</i>
                                </a>
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="tag">Ksh. 9,910,000</div>
                            <h3>
                                <a href="car-details.html">2021 MAZDA CX-30</a>
                            </h3>
                            <p><b>MILEAGES</b> 5 Miles, Willoughby Hills OH</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-featured-cars-box">
                        <div class="box-image">
                            <a href="car-details.html"><img src="images/featured-cars/featured-cars-10.jpg"
                                    alt="image"></a>
                            <div class="icon">
                                <a href="car-details.html">
                                    <i class="flaticon-gallery"> 9</i>
                                </a>
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="tag">Ksh. 4,510,000</div>
                            <h3>
                                <a href="car-details.html">2021 NISSAN CX-10</a>
                            </h3>
                            <p><b>MILEAGES</b> 7 Miles, Orland Park</p>
                        </div>
                    </div>
                    <div class="single-featured-cars-box">
                        <div class="box-image">
                            <a href="car-details.html"><img src="images/featured-cars/featured-cars-11.jpg"
                                    alt="image"></a>
                            <div class="icon">
                                <a href="car-details.html">
                                    <i class="flaticon-gallery"> 2</i>
                                </a>
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="tag">Ksh. 6,510,000</div>
                            <h3>
                                <a href="car-details.html">2021 VOLVO XC10</a>
                            </h3>
                            <p><b>MILEAGES</b> 6 Miles, Ramsey, NJ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="car-ranking-area bg-ffffff pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>TOP CAR LISTING</h2>
                <p>Look at the best cars in the ranking</p>
                <div class="section-btn">
                    <a href="./all-vehicles.html" class="default-btn">
                        View All
                        <span></span>
                    </a>
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
            </div>
        </div>
    </section>

    <section class="models-area pt-100">
        <div class="container">
            <div class="models-slides owl-carousel owl-theme">
                <div class="models-box-item">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="models-image four"></div>
                        </div>
                        <div class="col-lg-4">
                            <div class="models-title">
                                <h3>MOST POPULAR MODELS</h3>
                            </div>
                            <div class="models-item">
                                <div class="models-content">
                                    <h3>LISTING INFORMATION</h3>
                                    <div class="tag">Ksh. 7,510,000</div>
                                    <h4>2020 TESLA MODEL SXP-502D</h4>
                                </div>
                                <ul class="models-list">
                                    <li>Mileage</li>
                                    <li><span>: 128569 miles</span></li>
                                    <li>Body Type</li>
                                    <li><span>: Sedan</span></li>
                                    <li>Doors</li>
                                    <li><span>: Two Door</span></li>
                                    <li>Engine</li>
                                    <li><span>: 2.4L I4 16V MPFI DOHC</span></li>
                                    <li>Transmission</li>
                                    <li><span>: 4-Speed Automatic</span></li>
                                    <li>Drive Train</li>
                                    <li><span>: Front Wheel Drive</span></li>
                                    <li>Exterior Color</li>
                                    <li><span>: Red</span></li>
                                    <li>Interior Color</li>
                                    <li><span>: Beige</span></li>
                                    <li>Condition</li>
                                    <li><span>: New</span></li>
                                    <li>Fuel</li>
                                    <li><span>: GAS</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="models-box-item">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="models-image"></div>
                        </div>
                        <div class="col-lg-4">
                            <div class="models-title">
                                <h3>MOST POPULAR MODELS</h3>
                            </div>
                            <div class="models-item">
                                <div class="models-content">
                                    <h3>LISTING INFORMATION</h3>
                                    <div class="tag">Ksh. 9,510,000</div>
                                    <h4>2021 KIA SOUL XC 60</h4>
                                </div>
                                <ul class="models-list">
                                    <li>Mileage</li>
                                    <li><span>: 128569 miles</span></li>
                                    <li>Body Type</li>
                                    <li><span>: Sedan</span></li>
                                    <li>Doors</li>
                                    <li><span>: Two Door</span></li>
                                    <li>Engine</li>
                                    <li><span>: 2.4L I4 16V MPFI DOHC</span></li>
                                    <li>Transmission</li>
                                    <li><span>: 4-Speed Automatic</span></li>
                                    <li>Drive Train</li>
                                    <li><span>: Front Wheel Drive</span></li>
                                    <li>Exterior Color</li>
                                    <li><span>: Red</span></li>
                                    <li>Interior Color</li>
                                    <li><span>: Beige</span></li>
                                    <li>Condition</li>
                                    <li><span>: New</span></li>
                                    <li>Fuel</li>
                                    <li><span>: GAS</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="models-box-item">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="models-image two"></div>
                        </div>
                        <div class="col-lg-4">
                            <div class="models-title">
                                <h3>MOST POPULAR MODELS</h3>
                            </div>
                            <div class="models-item">
                                <div class="models-content">
                                    <h3>LISTING INFORMATION</h3>
                                    <div class="tag">Ksh. 9,910,000</div>
                                    <h4>2021 SUBARU XC-60</h4>
                                </div>
                                <ul class="models-list">
                                    <li>Mileage</li>
                                    <li><span>: 128569 miles</span></li>
                                    <li>Body Type</li>
                                    <li><span>: Sedan</span></li>
                                    <li>Doors</li>
                                    <li><span>: Two Door</span></li>
                                    <li>Engine</li>
                                    <li><span>: 2.4L I4 16V MPFI DOHC</span></li>
                                    <li>Transmission</li>
                                    <li><span>: 4-Speed Automatic</span></li>
                                    <li>Drive Train</li>
                                    <li><span>: Front Wheel Drive</span></li>
                                    <li>Exterior Color</li>
                                    <li><span>: Red</span></li>
                                    <li>Interior Color</li>
                                    <li><span>: Beige</span></li>
                                    <li>Condition</li>
                                    <li><span>: New</span></li>
                                    <li>Fuel</li>
                                    <li><span>: GAS</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="partner-area pb-100">
        <div class="container">
            <div class="partner-slides owl-carousel owl-theme">
                <div class="partner-item">
                    <img src="images/partner/partner-1.png" alt="image">
                </div>
                <div class="partner-item">
                    <img src="images/partner/partner-2.png" alt="image">
                </div>
                <div class="partner-item">
                    <img src="images/partner/partner-3.png" alt="image">
                </div>
                <div class="partner-item">
                    <img src="images/partner/partner-4.png" alt="image">
                </div>
                <div class="partner-item">
                    <img src="images/partner/partner-5.png" alt="image">
                </div>
                <div class="partner-item">
                    <img src="images/partner/partner-1.png" alt="image">
                </div>
                <div class="partner-item">
                    <img src="images/partner/partner-2.png" alt="image">
                </div>
                <div class="partner-item">
                    <img src="images/partner/partner-3.png" alt="image">
                </div>
                <div class="partner-item">
                    <img src="images/partner/partner-4.png" alt="image">
                </div>
                <div class="partner-item">
                    <img src="images/partner/partner-5.png" alt="image">
                </div>
            </div>
        </div>
    </div>


    <section class="blog-area bg-ffffff pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>UPCOMING AUCTIONS</h2>
                <p>Dont miss out, the best offers from direct show room </p>
                <div class="section-btn">
                    <a href="./auctions-vehicles.html" class="default-btn">
                        View All
                        <span></span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <a href="car-details.html"><img src="images/blog/blog-1.jpg" alt="image"></a>
                        <div class="blog-content">
                            <h3>
                                <a href="car-details.html">LEXUS XYZ</a>
                            </h3>
                            <ul class="post-meta">
                                <li>
                                    <i class="flaticon-user"></i>
                                    By:
                                    <a href="#">Ander Smith</a>
                                </li>
                                <li>
                                    <i class="flaticon-calendar"></i>
                                    Dec 20, 2021
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <a href="car-details.html"><img src="images/blog/blog-2.jpg" alt="image"></a>
                        <div class="blog-content">
                            <h3>
                                <a href="car-details.html"> SPORTS CAR</a>
                            </h3>
                            <ul class="post-meta">
                                <li>
                                    <i class="flaticon-user"></i>
                                    By:
                                    <a href="#">Timothy</a>
                                </li>
                                <li>
                                    <i class="flaticon-calendar"></i>
                                    Dec 19, 2021
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-blog">
                        <a href="car-details.html"><img src="images/blog/blog-3.jpg" alt="image"></a>
                        <div class="blog-content">
                            <h3>
                                <a href="car-details.html">VOLVO PRADO</a>
                            </h3>
                            <ul class="post-meta">
                                <li>
                                    <i class="flaticon-user"></i>
                                    By:
                                    <a href="#">Vasquez</a>
                                </li>
                                <li>
                                    <i class="flaticon-calendar"></i>
                                    Dec 18, 2021
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
