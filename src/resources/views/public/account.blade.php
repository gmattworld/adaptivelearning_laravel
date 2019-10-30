@extends('layouts.client')

@section('content')


<section class="ftco-cover overlay" style="background-image: url({{ URL::asset('client/images/bg_2.jpg') }});" id="section-home" data-aos="fade"  data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row align-items-center justify-content-center ftco-vh-100">
        <div class="col-md-9 text-center">
          <h1 class="ftco-heading mb-4" data-aos="fade-up" data-aos-delay="500">Contact Us</h1>
          <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up"  data-aos-delay="600">A free template for Law Firm Websites by <a href="https://colorlib.com/" target="_blank">Colorlib</a></h2>
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
          <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
        </div>
        <div class="col-md-3">
          <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
        </div>
        <div class="col-md-3">
          <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
        </div>
        <div class="col-md-3">
          <p><span>Website</span> <a href="#">yoursite.com</a></p>
        </div>
      </div>
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
          <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>

        </div>

        <div class="col-md-6" id="map"></div>
      </div>
    </div>
  </div>


@endsection
