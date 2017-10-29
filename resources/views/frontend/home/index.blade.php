@extends('layouts.frontend')

@section('content')


    @include('layouts.frontend.nav')


    <section class="cover height-80 imagebg text-center parallax" data-overlay="5">
        <div class="background-image-holder background--top">
            <img alt="background" src="{{ asset('images/home_bg.jpg') }}"/>
        </div>
        <div class="container pos-vertical-center">
            <div class="row">
                <div class="col-sm-8">
                    <img alt="Image" src="{{ asset('images/sc_header.png') }}"/>
                    <h3>
                        Scan. Connect. Stay up-to-date.
                    </h3>

                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>


        <section class="text-center">
            <div  id="how" class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <h2>How it work's</h2>


                        <div class="col-md-4">
                            <img alt="Image" src="{{ asset('images/process_1.png') }}"/>

                            <p class="lead">
                                Scan the Smart Contacts QR Code of your friend.
                            </p>


                        </div>

                        <div class="col-md-4">
                            <img alt="Image" src="{{ asset('images/process_2.png') }}"/>

                            <p class="lead">
                                Your friend‘s contact details will be in your phone contact list.</p>


                        </div>

                        <div class="col-md-4">
                            <img alt="Image" src="{{ asset('images/process_3.png') }}"/>

                            <p class="lead">
                                Your friend might get married and you don‘t have to take of anything.
                            </p>


                        </div>


                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>



        <!-- We used icons from Icon made by Freepik from www.flaticon.com -->

        <section style="background-color: lightgrey;" class="text-center">
            <div class="container">
                <div class="row">
                    <div style="margin-top: 100px;" class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                        <div class="col-md-4">
                            <img alt="Image" src="{{ asset('images/icon1.png') }}"/>

                            <p class="lead">

                                <strong>Connect
                                    within seconds
                                </strong><br>


                                Just use an QR code

                            </p>


                        </div>

                        <div class="col-md-4">
                            <img alt="Image" src="{{ asset('images/icon2.png') }}"/>

                            <p class="lead">

                                <strong>Always have
                                    up-to-date contact details
                                </strong><br>
                                If any of your contacts
                                changes a detail, it will
                                be autmatically updated on
                                your phone.
                            </p>


                        </div>

                        <div class="col-md-4">
                            <img alt="Image" src="{{ asset('images/icon3.png') }}"/>

                            <p class="lead">

                                <strong>No more need to inform your contacts about your profile changes
                                </strong><br>


                                Any change in your contact details will autmatically updated on your friends phone.

                            </p>


                        </div>


                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>


        <section class="text-center">
        <div id="story" class="container">
            <div class="row">
                <div style="margin-top: 100px;" class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <h2>Our story - BaselHack & Design Thinking</h2>
                    <div class="col-md-12">
                        <img alt="Image" src="{{ asset('images/baselhack.png') }}"/>

                    </div>


                    <hr>

                    <div class="col-md-12">
                        <img alt="Image" src="{{ asset('images/thinking.png') }}"/>

                    </div>

                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>


        <section class="text-center">
            <div class="container">
                <div class="row">
                    <div style="margin-top: 100px;" class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <h2>Our story - Prototyping</h2>
                        <div class="col-md-6">
                            <img alt="Image" src="{{ asset('images/qr_scan_1.png') }}"/>

                        </div>


                        <hr>

                        <div class="col-md-6">
                            <img alt="Image" src="{{ asset('images/qr_scan_2.png') }}"/>

                        </div>

                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>


        <section class="text-center">
            <div class="container">
                <div class="row">
                    <div style="margin-top: 100px;" class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <h2>Our story - Team</h2>




                        <div class="col-md-12">
                            <img alt="Image" src="{{ asset('images/team.png') }}"/>

                            <div style="margin-top: 5px;"> vl. Alexander Boll, Sebastian Fix, Oliver Reist, Thomas Baer, Richard Strnad </div>

                        </div>

                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>


        <section class="text-center">
            <div class="container">
                <div class="row">
                    <div style="margin-top: 100px;" class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                        <h2>Our story - Vision</h2>
                        <div class="col-md-12">
                            <img alt="Image" src="{{ asset('images/gm.jpg') }}"/>


                        </div>

                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>



    <section  class="text-center imagebg parallax" data-overlay="4">
        <div class="background-image-holder">
            <img alt="background" src="{{asset('images/footer_bg.jpg')}}"/>
        </div>
        <div id="signup"class="container">
            <div class="row">
                <div class="col-sm-10 col-md-8">
                    <div class="cta">
                        <h2>Sign up for BaselHack 2018!</h2>

                        <form class="text-left form-email">

                            <div class="col-sm-6">
                                <input placeholder="Your Name" type="text" name="Name" class="validate-required"required autofocus>
                            </div>
                            <div class="col-sm-6">
                                <input  placeholder="E-Mail Address" type="email" name="email" class="validate-required validate-email"required>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <button type="submit" class="btn btn--block btn--primary type--uppercase">Become a part of BaselHack 2018</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>


        @include('layouts.frontend.footer')




@endsection



@section('scripts')



@endsection
