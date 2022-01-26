<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">

    <link rel="stylesheet" href="{{ asset('css/boxicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/odometer.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/nice-select.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/slick-theme.min.css') }}">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Jquery Toast css -->
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">

    <title>
        {{ trans('panel.site_title') }} - @yield('title')
    </title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
</head>

<body>


    @include('partials.public.navbar')


    @yield('content')


    @include('partials.public.footer')

    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    Direct ©
                    <span id="year">
                        <script>
                            document.getElementById("year").innerHTML = new Date().getFullYear();
                        </script>
                    </span>
                    {{-- powered by
                    <a href="https://brancetech.com/" target="_blank">
                        Brance
                    </a> --}}
                </p>
            </div>
        </div>
    </div>


    <div class="go-top">
        <i class='bx bx-up-arrow-alt'></i>
    </div>


    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script src="{{ asset('js/popper.min.js') }}"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>

    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('js/jquery.appear.js') }}"></script>

    <script src="{{ asset('js/odometer.min.js') }}"></script>

    <script src="{{ asset('js/nice-select.min.js') }}"></script>

    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('js/slick.min.js') }}"></script>

    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>

    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>

    <script src="{{ asset('js/form-validator.min.js') }}"></script>

    <script src="{{ asset('js/contact-form-script.js') }}"></script>

    <script src="{{ asset('js/wow.min.js') }}"></script>

    <!-- notifications -->
    <script src="{{ asset('js/toastr.min.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript">
        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) {
                delta /= 2;
            }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i = 0; i < elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };
    </script>

    <script>
        // Get the Toast button
        var toastButton = document.getElementById("toast-btn");
        // Get the Toast element
        var toastElement = document.getElementsByClassName("toast")[0];

        toastButton.onclick = function() {
            $('.toast').toast('show');
        }
    </script>
    <script>
        // toast message
        @if (session()->has('success'))
            toastr.success("{{ session()->get('success') }}");
        @endif

        @if (session()->has('danger'))
            toastr.warning("{{ session()->get('danger') }}");
        @endif

        @if (session()->has('error'))
            toastr.error("{{ session()->get('error') }}");
        @endif
    </script>
</body>

</html>
