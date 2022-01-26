<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="{{ route('public.home') }}">
                        <img src="{{ asset('images/black-logo.png') }}" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navbar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('public.home') }}">
                    <img src="{{ asset('images/white-logo.png') }}" class="white-logo" alt="image">
                    <img src="{{ asset('images/black-logo.png') }}" class="black-logo" alt="image">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{ route('public.home') }}"
                                class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('local.stock') }}"
                                class="nav-link {{ request()->is('local-stock') }}">
                                Local stock
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Showrooms
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Auction
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                How we work
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Terms & Condition
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                    <div class="others-options d-flex align-items-center">
                        <!-- <div class="option-item">
                            <div class="dropdown-account">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="true">
                                    <i class='flaticon-user'></i>
                                    <span>My Account <i class='bx bx-chevron-down'></i></span>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="login.html" class="dropdown-item">
                                        <span>Login</span>
                                    </a>
                                    <a href="register.html" class="dropdown-item">
                                        <span>Register</span>
                                    </a>
                                    <a href="forgot-password.html" class="dropdown-item">
                                        <span>Forgot Password</span>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                        <div class="option-item">
                            <a data-bs-toggle="modal" data-bs-target="#registerShowroomModal"
                                data-bs-whatever="@getbootstrap" class="navbar-btn text-uppercase">
                                Register showroom
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>


{{-- register showroom modal --}}
<div class="modal fade" id="registerShowroomModal" tabindex="-1" aria-labelledby="registerShowroomModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-danger">
                    <small>
                        Fill in all the input fields to register showroom **
                    </small>
                </p>
                <form action="{{ route('showroom.register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name: <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="recipient-name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Phone: <span
                                class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="recipient-name" name="phone_number">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Email: <span
                                class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="recipient-name" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Location: <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="recipient-name" name="location">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Password: <span
                                class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="recipient-name" name="password">
                    </div>
                    <button type="submit" class="btn btn-danger">Submit Showroom</button>
                </form>
            </div>
        </div>
    </div>
</div>
