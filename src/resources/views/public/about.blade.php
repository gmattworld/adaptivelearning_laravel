@extends('layouts.client')

@section('content')


<section class="ftco-cover overlay" style="background-image: url({{ URL::asset('client/images/bg_3.jpg') }});" id="section-home" data-aos="fade"  data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row align-items-center justify-content-center ftco-vh-100">
        <div class="col-md-9 text-center">
          <h1 class="ftco-heading mb-4" data-aos="fade-up" data-aos-delay="500">About Us</h1>
          <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up"  data-aos-delay="600">A free template for Law Firm Websites by <a href="https://colorlib.com/" target="_blank">Colorlib</a></h2>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <section class="ftco-section-2">
    <div class="container">
      <div class="row pt-5">
        <div class="col-md-12 text-center mb-5 pt-5" data-aos="fade-up">
          <h1 class="ftco-heading heading-thin mb-5">In our long history of helping people and businesses, we’ve accumulated a 98% of positive verdicts rate, which beats any of our local competitor’s margins by double digits... </h1>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="section-2-blocks-wrapper row no-gutters">
        <div class="img col-sm-12 col-md-6" style="background-image: url({{ URL::asset('client/images/image_4.jpg') }});" data-aos="fade-right">
          {{-- <a href="https://vimeo.com/45830194" class="button popup-vimeo" data-aos="fade-right" data-aos-delay="700"><span class="ion-ios-play"></span></a> --}}
        </div>
        <div class="text col-md-6">
          <div class="text-inner align-self-start" data-aos="fade-up">

            <h3>Founder in 1856, Our Agency has over 175 lawyers</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center"  data-aos="fade-up">
          <h2>Our Attorneys</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 mb-4" data-aos="fade-up">
          <div class="block-10">
            <div class="person-info mb-3">
              <span class="name">Myla Smith</span>
              <span class="position">Counsel</span>
            </div>
            <img src="{{ URL::asset('client/images/person_1.jpg') }}" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mb-4" data-aos="fade-up">
          <div class="block-10">
            <div class="person-info mb-3">
              <span class="name">Aldin Powell</span>
              <span class="position">Head of International Practice</span>
            </div>
            <img src="{{ URL::asset('client/images/person_3.jpg') }}" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mb-4" data-aos="fade-up">
          <div class="block-10">
            <div class="person-info mb-3">
              <span class="name">Clarice Clark</span>
              <span class="position">Managing Partner, Attorney</span>
            </div>
            <img src="{{ URL::asset('client/images/person_2.jpg') }}" alt="" class="img-fluid">
          </div>
        </div>

        <div class="col-sm-6 col-md-4 mb-4" data-aos="fade-up">
          <div class="block-10">
            <div class="person-info mb-3">
              <span class="name">Myla Smith</span>
              <span class="position">Counsel</span>
            </div>
            <img src="{{ URL::asset('client/images/person_1.jpg') }}" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mb-4" data-aos="fade-up">
          <div class="block-10">
            <div class="person-info mb-3">
              <span class="name">Aldin Powell</span>
              <span class="position">Head of International Practice</span>
            </div>
            <img src="{{ URL::asset('client/images/person_3.jpg') }}" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mb-4" data-aos="fade-up">
          <div class="block-10">
            <div class="person-info mb-3">
              <span class="name">Clarice Clark</span>
              <span class="position">Managing Partner, Attorney</span>
            </div>
            <img src="{{ URL::asset('client/images/person_2.jpg') }}" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
