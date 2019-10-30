@extends('layouts.client')

@section('content')

<section class="ftco-cover overlay" style="background-image: url({{ URL::asset('client/images/bg_4.jpg') }});" id="section-home" data-aos="fade"  data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row align-items-center justify-content-center ftco-vh-100">
        <div class="col-md-9 text-center">
          <h1 class="ftco-heading mb-4" data-aos="fade-up" data-aos-delay="500">Case Archive</h1>
          <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up"  data-aos-delay="600">There are some things money can't buy. For everything else, there's MasterCard.</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <div class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center mb-5" data-aos="fade-up">
          <h1 class="ftco-heading heading-thin mb-5"></h1>
        </div>
      </div>
      <div class="row">


        @if(count($cases) > 0)
            @foreach($cases as $case)
                <div class="col-sm-6 col-md-4">
                    <div class="block-10">
                        <div class="won-img mb-3" style="background-image: url({{ URL::asset('/storage/cover_imgs/'. $case->cover_img) }});"></div>
                        <div class="person-info">
                            <span class="name-2 mb-3">{{ $case->name }}</span>
                            <p>{{ $case->brief }}</p>
                            <span class="result">Status: {{ $case->status }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-sm-12"><h4 class="text-center"><strong>We are still preparing cases, Kindly check back!</strong></h4></div>
        @endif
      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
