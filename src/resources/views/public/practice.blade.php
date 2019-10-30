@extends('layouts.client')

@section('content')
    <section class="ftco-cover overlay" style="background-image: url({{ URL::asset('client/images/court-hammer.jpg') }});" id="section-home" data-aos="fade"  data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
        <div class="row align-items-center justify-content-center ftco-vh-100">
            <div class="col-md-9 text-center">
            <h1 class="ftco-heading mb-4" data-aos="fade-up" data-aos-delay="500">Practice Areas</h1>
            {{-- <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up"  data-aos-delay="600">A free template for Law Firm Websites by <a href="https://colorlib.com/" target="_blank">Colorlib</a></h2> --}}
            </div>
        </div>
        </div>
    </section>
    <!-- END section -->

    <div class="ftco-section">
        <div class="container">
            <div class="row">
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="media block-6 d-block text-center">
                <div class="icon mb-4"><span class="flaticon-gavel"></span></div>
                <div class="media-body">
                    <h3 class="heading">Case Investigation</h3>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="media block-6 d-block text-center">
                <div class="icon mb-4"><span class="flaticon-balance"></span></div>
                <div class="media-body">
                    <h3 class="heading">Personal Injury</h3>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="media block-6 d-block text-center">
                <div class="icon mb-4"><span class="flaticon-lawyer"></span></div>
                <div class="media-body">
                    <h3 class="heading">Legal Counseling</h3>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="media block-6 d-block text-center">
                <div class="icon mb-4"><span class="flaticon-courthouse"></span></div>
                <div class="media-body">
                    <h3 class="heading">Civil Ligitation</h3>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="media block-6 d-block text-center">
                <div class="icon mb-4"><span class="flaticon-handshake"></span></div>
                <div class="media-body">
                    <h3 class="heading">Business Law</h3>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="media block-6 d-block text-center">
                <div class="icon mb-4"><span class="flaticon-health-insurance"></span></div>
                <div class="media-body">
                    <h3 class="heading">Insurance Defense</h3>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
