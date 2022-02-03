@extends('layouts.public.home')
@section('title')
    Contact Us
@endsection
@section('content')
    <div class="container">
        <section class="contact-info-area pt-100 pb-70 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center mb-5">
                        <h1 class="display-3 text-bold">Contact Us</h1>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class='flaticon-pin'></i>
                            </div>
                            <h3>Address:</h3>
                            <p>2364 Oakdale Avenue Clearwater, FL 34620, New York, USA</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class='flaticon-call'></i>
                            </div>
                            <h3>Phone:</h3>
                            <p><a href="tel:15143126677">+1 (514) 312-6677</a></p>
                            <p><a href="tel:15143125566">+1 (514) 312-5566</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class='flaticon-email'></i>
                            </div>
                            <h3>Email:</h3>
                            <p><a href=""><span class="__cf_email__">email@email.com</span></a>
                            </p>
                            <p><a><span class="__cf_email__">email@email.com</span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="contact-area pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <div class="title">
                                <h3>CONTACT DIRECT.CO.KE</h3>
                            </div>
                            <form action="{{ route('contact-us.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Your Name</label>
                                            <input type="text" name="name" id="name" class="form-control" required
                                                data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Your Email</label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Your Phone</label>
                                            <input type="text" name="phone_number" id="phone_number" required
                                                data-error="Please enter your number" class="form-control">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Your Subject</label>
                                            <input type="text" name="subject" id="msg_subject" class="form-control"
                                                required data-error="Please enter your subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Your Message</label>
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                                required data-error="Write your message" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkme" required>
                                            <label class="form-check-label" for="checkme">
                                                Accept <a href="#">Terms of Services</a> and <a
                                                    href="#">Privacy Policy</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn">
                                            Send Message
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.870619622822!2d39.68260681447532!3d-4.046808946006873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184012f227d1296f%3A0xd7c3bf3a7679513f!2sRatna%20Square%20Shopping%20Centre!5e0!3m2!1sen!2sbd!4v1638947980769!5m2!1sen!2sbd"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
