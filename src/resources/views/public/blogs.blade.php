@extends('layouts.client')

@section('content')


<section class="ftco-cover overlay" style="background-image: url({{ URL::asset('client/images/image_8.jpg') }});" id="section-home" data-aos="fade"  data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row align-items-center justify-content-center ftco-vh-100">
        <div class="col-md-9 text-center">
          <h1 class="ftco-heading mb-4" data-aos="fade-up" data-aos-delay="500">Our Blog</h1>
          <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up"  data-aos-delay="600">A free template for Law Firm Websites by <a href="https://colorlib.com/" target="_blank">Colorlib</a></h2>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <div class="ftco-section">
    <div class="container">
      <div class="row">

        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="col-md-6 col-lg-4 blog-entry" data-aos="fade-up">
                    <a href="{{ URL('/blog/'.$post->id) }}" class="block-20" style="background-image: url({{ URL::asset('/storage/cover_images/'. $post->cover_img) }});">
                    </a>
                    <div class="text">
                        <h3 class="heading"><a href="{{ URL('/blog/'.$post->id) }}">{{ $post->topic }}</a></h3>
                        <div class="meta">
                        <div><a href="#"><span class="icon-calendar"></span> {{ $post->created_at }} </a></div>
                        <div><a href="#"><span class="icon-person"></span> {{ $post->user->name }}</a></div>
                        <div><a href="#"><span class="icon-chat"></span> {{ $post->views }} </a></div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-sm-12"><h4 class="text-center"><strong>We are still working on our thoughts, Kindly check back!</strong></h4></div>
        @endif
      </div>
      {{-- <div class="row mt-5">
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
      </div> --}}
    </div>
  </div>

@endsection
