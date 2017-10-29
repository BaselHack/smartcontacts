@extends('layouts.frontend')

@section('content')


    <div class="nav-container ">
        <div class="bar bar--sm visible-xs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3 col-sm-2">
                        <a href="{{ route('frontend.home.index') }}">
                            <img class="logo logo-dark" alt="logo" src="{{ asset('images/logo_dark.png') }}" />
                            <img class="logo logo-light" alt="logo" src="{{ asset('images/logo_light.png') }}" />
                        </a>
                    </div>
                    <div class="col-xs-9 col-sm-10 text-right">
                        <a href="#" class="hamburger-toggle" data-toggle-class="#menu1;hidden-xs">
                            <i class="icon icon--sm stack-interface stack-menu"></i>
                        </a>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </div>
        <!--end bar-->
        <nav id="menu1" class="bar bar--sm bar-1 hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-1 col-sm-2 hidden-xs">
                        <div class="bar__module">
                            <a href="{{ route('frontend.home.index') }}">
                                <img class="logo logo-dark" alt="logo" src="{{ asset('images/logo_dark.png') }}" />
                                <img class="logo logo-light" alt="logo" src="{{ asset('images/logo_light.png') }}" />
                            </a>
                        </div>
                        <!--end module-->
                    </div>
                    <div class="col-md-11 col-sm-12 text-right text-left-xs text-left-sm">
                        <div class="bar__module">
                            <ul class="menu-horizontal text-left">


                                <li>
                                    <a href="{{ route('frontend.home.index') }}">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('frontend.contact.index') }}">
                                        <span>Contact</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!--end module-->
                        <div class="bar__module">

                            <a class="btn btn--sm btn--primary type--uppercase" href="#">
                                    <span class="btn__text">
                                      BaselHack 2018
                                    </span>
                            </a>
                        </div>
                        <!--end module-->
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </nav>
        <!--end bar-->
    </div>




    <div class="main-container">


        <section class="text-center imagebg" data-overlay="4">
            <div class="background-image-holder background--bottom">
                <img alt="background" src="{{ asset('images/baselhack_bg.jpg') }}" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>BaselHack 2018</h1>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>



    <section class="text-center ">

        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7">
                    <div class="row">
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
                    <!--end of row-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

        @include('layouts.frontend.footer')




    </div>

@endsection



@section('scripts')



@endsection
