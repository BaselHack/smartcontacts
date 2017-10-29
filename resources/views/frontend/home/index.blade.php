@extends('layouts.frontend')

@section('content')


    @include('layouts.frontend.nav')


    <div class="main-container">
    <section class="cover height-80 imagebg text-center parallax" data-overlay="5">
        <div class="background-image-holder background--top">
            <img alt="background" src="{{ asset('images/home_bg.jpg') }}"/>
        </div>
        <div class="container pos-vertical-center">
            <div class="row">
                <div class="col-sm-8">
                    <img alt="Image" src="img/headline-2.png"/>
                    <h3>
                        Lorem Ipsum
                    </h3>

                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

    <section class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <h2>Lorem Ipsumè</h2>
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="feature feature-6">
                        <i class="icon icon--lg icon-Laughing color--primary"></i>
                        <h4>Lorem Ipsum</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                    </div>
                    <!--end feature-->
                </div>
                <div class="col-sm-4">
                    <div class="feature feature-6">
                        <i class="icon icon--lg icon-Medical-Sign color--primary"></i>
                        <h4>Lorem Ipsum</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                    </div>
                    <!--end feature-->
                </div>
                <div class="col-sm-4">
                    <div class="feature feature-6">
                        <i class="icon icon--lg icon-Finger-Print color--primary"></i>
                        <h4>Lorem Ipsum</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                    </div>
                    <!--end feature-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

    <section class="text-center imagebg parallax" data-overlay="4">
        <div class="background-image-holder">
            <img alt="background" src="{{asset('images/footer_bg.jpg')}}"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-8">
                    <div class="cta">
                        <h2>Lorem Ipsum</h2>
                        <p class="lead">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                        </p>
                        <a class="btn btn--primary type--uppercase" href="#">
                                    <span class="btn__text">
                                         BaselHack 2018
                                    </span>
                        </a>
                    </div>
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
