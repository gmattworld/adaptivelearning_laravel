@extends('layouts.client')

@section('content')


    <section class="ftco-cover overlay" style="background-image: url({{ URL::asset('client/images/bg_2.jpg') }});" id="section-home" data-aos="fade"  data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center ftco-vh-100">
                <div class="col-sm-12 text-center">
                    <div class="jumbotron bg-light">
                        <div class="text-center" style="margin-bottom:40px;">
                            <p>
                                <h3>
                                    {{ $report }}

                                </h3>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
