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
                                        <form action="{{ route('advanced.search.query')}}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <select name="year">
                                                            <option>Year</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1960">1960</option>
                                                            <option value="1959">1959</option>
                                                            <option value="1958">1958</option>
                                                            <option value="1957">1957</option>
                                                            <option value="1956">1956</option>
                                                            <option value="1955">1955</option>
                                                            <option value="1954">1954</option>
                                                            <option value="1953">1953</option>
                                                            <option value="1952">1952</option>
                                                            <option value="1951">1951</option>
                                                            <option value="1950">1950</option>
                                                            <option value="1949">1949</option>
                                                            <option value="1948">1948</option>
                                                            <option value="1947">1947</option>
                                                            <option value="1946">1946</option>
                                                            <option value="1945">1945</option>
                                                            <option value="1944">1944</option>
                                                            <option value="1943">1943</option>
                                                            <option value="1942">1942</option>
                                                            <option value="1941">1941</option>
                                                            <option value="1940">1940</option>
                                                            <option value="1939">1939</option>
                                                            <option value="1938">1938</option>
                                                            <option value="1937">1937</option>
                                                            <option value="1936">1936</option>
                                                            <option value="1935">1935</option>
                                                            <option value="1934">1934</option>
                                                            <option value="1933">1933</option>
                                                            <option value="1932">1932</option>
                                                            <option value="1931">1931</option>
                                                            <option value="1930">1930</option>
                                                            <option value="1929">1929</option>
                                                            <option value="1928">1928</option>
                                                            <option value="1927">1927</option>
                                                            <option value="1926">1926</option>
                                                            <option value="1925">1925</option>
                                                            <option value="1924">1924</option>
                                                            <option value="1923">1923</option>
                                                            <option value="1922">1922</option>
                                                            <option value="1921">1921</option>
                                                            <option value="1920">1920</option>
                                                            <option value="1919">1919</option>
                                                            <option value="1918">1918</option>
                                                            <option value="1917">1917</option>
                                                            <option value="1916">1916</option>
                                                            <option value="1915">1915</option>
                                                            <option value="1914">1914</option>
                                                            <option value="1913">1913</option>
                                                            <option value="1912">1912</option>
                                                            <option value="1911">1911</option>
                                                            <option value="1910">1910</option>
                                                            <option value="1909">1909</option>
                                                            <option value="1908">1908</option>
                                                            <option value="1907">1907</option>
                                                            <option value="1906">1906</option>
                                                            <option value="1905">1905</option>
                                                            <option value="1904">1904</option>
                                                            <option value="1903">1903</option>
                                                            <option value="1902">1902</option>
                                                            <option value="1901">1901</option>
                                                            <option value="1900">1900</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <select name="make" class="text-capitalize">
                                                            <option>Make</option>
                                                            <option value="ACURA">ACURA</option>
                                                            <option value="ASTON MARTIN">ASTON MARTIN</option>
                                                            <option value="AUDI">AUDI</option>
                                                            <option value="BENTLEY">BENTLEY</option>
                                                            <option value="BMW">BMW</option>
                                                            <option value="BUICK">BUICK</option>
                                                            <option value="CADILLAC">CADILLAC</option>
                                                            <option value="CHEVROLET">CHEVROLET</option>
                                                            <option value="CHRYSLER">CHRYSLER</option>
                                                            <option value="DODGE">DODGE</option>
                                                            <option value="FERRARI">FERRARI</option>
                                                            <option value="FORD">FORD</option>
                                                            <option value="GMC">GMC</option>
                                                            <option value="HONDA">HONDA</option>
                                                            <option value="HUMMER">HUMMER</option>
                                                            <option value="HYUNDAI">HYUNDAI</option>
                                                            <option value="INFINITI">INFINITI</option>
                                                            <option value="ISUZU">ISUZU</option>
                                                            <option value="JAGUAR">JAGUAR</option>
                                                            <option value="JEEP">JEEP</option>
                                                            <option value="KIA">KIA</option>
                                                            <option value="LAMBORGHINI">LAMBORGHINI</option>
                                                            <option value="LAND ROVER">LAND ROVER</option>
                                                            <option value="LEXUS">LEXUS</option>
                                                            <option value="LINCOLN">LINCOLN</option>
                                                            <option value="LOTUS">LOTUS</option>
                                                            <option value="MASERATI">MASERATI</option>
                                                            <option value="MAYBACH">MAYBACH</option>
                                                            <option value="MAZDA">MAZDA</option>
                                                            <option value="MERCEDES-BENZ">MERCEDES-BENZ</option>
                                                            <option value="MERCURY">MERCURY</option>
                                                            <option value="MINI">MINI</option>
                                                            <option value="MITSUBISHI">MITSUBISHI</option>
                                                            <option value="NISSAN">NISSAN</option>
                                                            <option value="PONTIAC">PONTIAC</option>
                                                            <option value="PORSCHE">PORSCHE</option>
                                                            <option value="ROLLS-ROYCE">ROLLS-ROYCE</option>
                                                            <option value="SAAB">SAAB</option>
                                                            <option value="SATURN">SATURN</option>
                                                            <option value="SUBARU">SUBARU</option>
                                                            <option value="SUZUKI">SUZUKI</option>
                                                            <option value="TOYOTA">TOYOTA</option>
                                                            <option value="VOLKSWAGEN">VOLKSWAGEN</option>
                                                            <option value="VOLVO">VOLVO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                                                    <div class="form-group">
                                                        <select class="max_price" name="max_price">
                                                            <option>Max Price</option>
                                                            <option value="100000">KSh100,000</option>
                                                            <option value="300000">KSh300,000</option>
                                                            <option value="500000">KSh500,000</option>
                                                            <option value="700000">KSh700,000</option>
                                                            <option value="800000">KSh800,000</option>
                                                            <option value="1000000">KSh1,000,000</option>
                                                            <option value="1500000">KSh1,500,000</option>
                                                            <option value="2000000">KSh2,000,000</option>
                                                            <option value="2500000">KSh2,500,000</option>
                                                            <option value="3000000">KSh3,000,000</option>
                                                            <option value="3500000">KSh3,500,000</option>
                                                            <option value="4000000">KSh4,000,000</option>
                                                            <option value="4500000">KSh4,500,000</option>
                                                            <option value="5000000">KSh5,000,000</option>
                                                            <option value="5500000">KSh5,500,000</option>
                                                            <option value="6000000">KSh6,000,000</option>
                                                            <option value="6500000">KSh6,500,000</option>
                                                            <option value="7500000">KSh7,500,000</option>
                                                            <option value="8000000">KSh8,000,000</option>
                                                            <option value="8500000">KSh8,500,000</option>
                                                            <option value="9000000">KSh9,000,000</option>
                                                            <option value="9500000">KSh9,500,000</option>
                                                            <option value="10000000">KSh10,000,000</option>
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
                                        <form action="{{ route('search.query-showroom') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12 col-md-6">
                                                    <div class="form-group showrooms-search">
                                                        <input type="text" class="form-control" name="search"
                                                            placeholder="Search by name or location..." autofocus="off"
                                                            required>
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
                    <a href="{{ route('showrooms.list') }}" class="default-btn">
                        View All
                        <span></span>
                    </a>
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
                @endif
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
                            <a href="#"><img src="images/featured-cars/featured-cars-7.jpg" alt="image"></a>
                            <div class="icon">
                                <a href="#">
                                    <i class="flaticon-gallery"> 5</i>
                                </a>
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="tag">Ksh. 3,010,000</div>
                            <h3>
                                <a href="#">2021 VOLVO XC60</a>
                            </h3>
                            <p><b>MILEAGES</b> 4 Miles, Orland Park</p>
                        </div>
                    </div>
                    <div class="single-featured-cars-box">
                        <div class="box-image">
                            <a href="#"><img src="images/featured-cars/featured-cars-8.jpg" alt="image"></a>
                            <div class="icon">
                                <a href="#">
                                    <i class="flaticon-gallery"> 4</i>
                                </a>
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="tag">Ksh. 5,510,000</div>
                            <h3>
                                <a href="#">2021 TOYOTA RAV4</a>
                            </h3>
                            <p><b>MILEAGES</b> 5 Miles, Orland Park</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-featured-cars-box">
                        <div class="box-image">
                            <a href="#"><img src="images/featured-cars/featured-cars-9.jpg" alt="image"></a>
                            <div class="icon">
                                <a href="#">
                                    <i class="flaticon-gallery"> 6</i>
                                </a>
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="tag">Ksh. 9,910,000</div>
                            <h3>
                                <a href="#">2021 MAZDA CX-30</a>
                            </h3>
                            <p><b>MILEAGES</b> 5 Miles, Willoughby Hills OH</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-featured-cars-box">
                        <div class="box-image">
                            <a href="#"><img src="images/featured-cars/featured-cars-10.jpg" alt="image"></a>
                            <div class="icon">
                                <a href="#">
                                    <i class="flaticon-gallery"> 9</i>
                                </a>
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="tag">Ksh. 4,510,000</div>
                            <h3>
                                <a href="#">2021 NISSAN CX-10</a>
                            </h3>
                            <p><b>MILEAGES</b> 7 Miles, Orland Park</p>
                        </div>
                    </div>
                    <div class="single-featured-cars-box">
                        <div class="box-image">
                            <a href="#"><img src="images/featured-cars/featured-cars-11.jpg" alt="image"></a>
                            <div class="icon">
                                <a href="#">
                                    <i class="flaticon-gallery"> 2</i>
                                </a>
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="tag">Ksh. 6,510,000</div>
                            <h3>
                                <a href="#">2021 VOLVO XC10</a>
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
                    <a href="#" class="default-btn">
                        View All
                        <span></span>
                    </a>
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
                                    <div class="tag">Ksh. {{ number_format($inventory->price ?? '00') }}
                                    </div>
                                    <h3>
                                        <a
                                            href="{{ route('vehicle.details', $inventory->slug) }}">{{ $inventory->brand_name ?? '' }}</a>
                                    </h3>
                                    <p><b>MILEAGES</b> {{ $inventory->milage ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
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
                        <a href="#"><img src="images/blog/blog-1.jpg" alt="image"></a>
                        <div class="blog-content">
                            <h3>
                                <a href="#">LEXUS XYZ</a>
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
                        <a href="#"><img src="images/blog/blog-2.jpg" alt="image"></a>
                        <div class="blog-content">
                            <h3>
                                <a href="#"> SPORTS CAR</a>
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
                        <a href="#"><img src="images/blog/blog-3.jpg" alt="image"></a>
                        <div class="blog-content">
                            <h3>
                                <a href="#">VOLVO PRADO</a>
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
@section('js')
    <script>
        let dateDropdown = document.getElementById('date-dropdown');

        let currentYear = new Date().getFullYear();
        let earliestYear = 1970;

        while (currentYear >= earliestYear) {
            let dateOption = document.createElement('option');
            dateOption.text = currentYear;
            dateOption.value = currentYear;
            dateDropdown.add(dateOption);
            currentYear -= 1;
        }
    </script>

@endsection
