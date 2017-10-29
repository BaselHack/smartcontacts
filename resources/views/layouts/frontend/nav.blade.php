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
                    <a href="#" class="hamburger-toggle" data-toggle-class="#menu2;hidden-xs hidden-sm">
                        <i class="icon icon--sm stack-interface stack-menu"></i>
                    </a>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </div>
    <!--end bar-->
    <nav id="menu2" class="bar bar-2 hidden-xs bar--absolute bar--transparent">
        <div class="container">
            <div class="row">
                <div class="col-md-2 text-center text-left-sm hidden-xs col-md-push-5">
                    <div class="bar__module">
                        <a href="{{ route('frontend.home.index') }}">
                            <img class="logo logo-dark" alt="logo" src="{{ asset('images/logo_dark.png') }}" />
                            <img class="logo logo-light" alt="logo" src="{{ asset('images/logo_light.png') }}" />
                        </a>
                    </div>
                    <!--end module-->
                </div>
                <div class="col-md-5 col-md-pull-2">
                    <div class="bar__module">
                        <ul class="menu-horizontal text-left">



                            <li>
                                <a href="{{ route('frontend.home.index') }}">
                                    <span>Home</span>
                                </a>
                            </li>

                            <li>
                                <a href="#how">
                                    <span>How it works</span>
                                </a>
                            </li>


                            <li>
                                <a href="#story">
                                    <span>Our Story</span>
                                </a>
                            </li>




                        </ul>
                    </div>
                    <!--end module-->
                </div>
                <div class="col-md-5 text-right text-left-xs text-left-sm">
                    <div class="bar__module">
                        <a class="btn btn--sm btn--primary type--uppercase" href="#signup">
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