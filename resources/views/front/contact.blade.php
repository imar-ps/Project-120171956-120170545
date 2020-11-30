@extends('front.layouts.master')
@section('page-title')
    Contact Us
@endsection

@section('content')
<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>contact us</h4>
                        <h2>let’s stay in touch!</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="contact-us">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="down-contact">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="sidebar-item contact-form">
                                <div class="sidebar-heading">
                                    <h2>Send us a message</h2>
                                </div>
                                <div class="content">
                                    <form id="contact" action="" method="post">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input name="name" type="text" id="name" placeholder="Your name" required="">
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input name="email" type="text" id="email" placeholder="Your email" required="">
                                                </fieldset>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <fieldset>
                                                    <input name="subject" type="text" id="subject" placeholder="Subject">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <textarea name="message" rows="6" id="message" placeholder="Your Message" required=""></textarea>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <button type="submit" id="form-submit" class="main-button">Send Message</button>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="sidebar-item contact-information">
                                <div class="sidebar-heading">
                                    <h2>contact information</h2>
                                </div>
                                <div class="content">
                                    <ul>
                                        <li>
                                            <h5>+972 59 2279675</h5>
                                            <h5>+972 56 8604883</h5>
                                            <span>PHONE NUMBERS</span>
                                        </li>
                                        <li>
                                            <h5>info@martravel.com</h5>
                                            <span>EMAIL ADDRESS</span>
                                        </li>
                                        <li>
                                            <h5>Al-Nasser Street, Gaza City
                                                <br>Gaza Strip, Palestine</h5>
                                            <span>STREET ADDRESS</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13605.420842072364!2d34.4393177!3d31.5144026!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb9c1e848050d3493!2z2KfZhNis2KfZhdi52Kkg2KfZhNil2LPZhNin2YXZitipINmB2Yog2LrYstip!5e0!3m2!1sar!2s!4v1606689713255!5m2!1sar!2s" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
