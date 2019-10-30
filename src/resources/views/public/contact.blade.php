@extends('layouts.client')

@section('content')


<section class="ftco-cover overlay" style="background-image: url({{ URL::asset('client/images/bg_2.jpg') }});" id="section-home" data-aos="fade"  data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row align-items-center justify-content-center ftco-vh-100">
        <div class="col-md-9 text-center">
          <h1 class="ftco-heading mb-4" data-aos="fade-up" data-aos-delay="500">Contact Us</h1>
          <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up"  data-aos-delay="600"></h2>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <div class="ftco-section contact-section">
    <div class="container bg-light">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="h4">Contact Information</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-3">
          <p><span>Address:</span> Lagos State Judiciary, Oba Akinjobi Way, Ikeja, Lagos</p>
        </div>
        <div class="col-md-3">
          <p><span>Phone:</span> <a href="tel://2348182052046">+2348182052046, +2348182052197</a></p>
        </div>
        <div class="col-md-3">
          <p><span>Email:</span> <a href="mailto:support@lagosjudiciary.gov.ng">support@lagosjudiciary.gov.ng</a></p>
        </div>
        <div class="col-md-3">
          <p><span>Website</span> <a href="#">lagosjudiciary.gov.ng</a></p>
        </div>
      </div>
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
            <!-- BEGIN FORM-->
            {!! Form::open(['action' => 'HomeController@SaveContact', 'method'=>'POST', 'id'=>'form_validation']) !!}
                <div class="form-body">
                    @include('inc.message')
                    @csrf()
                    <div class="form-group">
                        {!! Form::text('name', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Your Name']) !!}
                        <span class="text-danger"> {!! $errors->first('name'); !!} </span>
                    </div>
                    <div class="form-group">
                        {!! Form::text('email', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Your Email']) !!}
                        <span class="text-danger"> {!! $errors->first('email'); !!} </span>
                    </div>
                    <div class="form-group">
                        {!! Form::text('subject', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Subject']) !!}
                        <span class="text-danger"> {!! $errors->first('subject'); !!} </span>
                    </div>
                    <div class="form-group">
                        {!! Form::textarea('message', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Message']) !!}
                        <span class="text-danger"> {!! $errors->first('message'); !!} </span>
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Send Message', ['class'=>'btn btn-primary py-3 px-5']) !!}
                    </div>
                </div>
            {!! Form::close() !!}
            <!-- END FORM-->
        </div>
        <div class="col-md-6" id="map"></div>
      </div>
    </div>
  </div>


@endsection
