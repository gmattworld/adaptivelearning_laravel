@extends('layouts.client')

@section('content')
<section class="ftco-cover overlay" style="background-image: url({{ URL::asset('client/images/bg_1.jpg') }});" id="section-home" data-aos="fade"  data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center ftco-vh-100">
        <div class="col-md-8 text-center">
          <h1 class="ftco-heading mb-4" data-aos="fade-up" data-aos-delay="500"><strong>Welcome to <br />Lagos State Judiciary</strong></h1>
          <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up"  data-aos-delay="600">
              Welcome to Lagos State Judiciary web site. We are committed to ensuring disputes are resolved fairly,
              timely, transparently and economically by leveraging enabling technology with inherent seamless
              integration of the court processes, structures and administration.
            </h2>
            <p data-aos="fade-up"  data-aos-delay="700">
              <a href="{{ URL('/practice') }}" class="btn btn-outline-white px-4 py-3">Read more</a>
            </p>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <div class="ftco-section ftco-counter" id="section-counter">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap" data-aos="fade-up">
          <div class="block-18 d-flex align-items-center">
            <div class="icon mr-4">
              <span class="flaticon-lawyer"></span>
            </div>
            <div class="text">
              <strong class="number" data-number="1000">0</strong>
              <span>Qualified Lawyer</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap" data-aos="fade-up">
          <div class="block-18 d-flex align-items-center">
            <div class="icon mr-4">
              <span class="flaticon-handshake"></span>
            </div>
            <div class="text">
              <strong class="number" data-number="12000">0</strong>
              <span>Trusted Clients</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap" data-aos="fade-up">
          <div class="block-18 d-flex align-items-center">
            <div class="icon mr-4">
              <span class="flaticon-medal"></span>
            </div>
            <div class="text">
              <strong class="number" data-number="10000">0</strong>
              <span>Won Cases</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap" data-aos="fade-up">
          <div class="block-18 d-flex align-items-center">
            <div class="icon mr-4">
              <span class="flaticon-trophy"></span>
            </div>
            <div class="text">
              <strong class="number" data-number="12921">5143</strong>
              <span>Honor &amp; Awards</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section-2">
    <div class="container-fluid">
      <div class="section-2-blocks-wrapper row no-gutters">
        <div class="img col-sm-12 col-md-6" style="background-image: url({{ URL::asset('client/images/court-hammer.jpg') }});" data-aos="fade-right">
          {{-- <a href="https://vimeo.com/45830194" class="button popup-vimeo" data-aos="fade-right" data-aos-delay="700"><span class="ion-ios-play"></span></a> --}}
        </div>
        <div class="text col-md-6">
          <div class="text-inner align-self-start" data-aos="fade-up">

            <h3>Commitment Statement</h3>
            <p>
                We the staff of Lagos State Judiciary are committed to Lagos State and the Community.
                Our mission is to provide quality and professional service in a knowledgeable manner.
                We take pride in our work and hold ourselves accountable to the highest standard of performance.
                Our goals are achieved through mutual co-operation, a strong sense of integrity, a positive attitude
                and teamwork
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center" data-aos="fade-up">
          <h2>What We Do</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <div class="media block-6 d-block text-center">
            <div class="icon mb-4"><span class="flaticon-gavel"></span></div>
            <div class="media-body">
              <h3 class="heading">Case Investigation</h3>
              {{-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p> --}}
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="media block-6 d-block text-center">
            <div class="icon mb-4"><span class="flaticon-balance"></span></div>
            <div class="media-body">
              <h3 class="heading">Personal Injury</h3>
              {{-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p> --}}
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="media block-6 d-block text-center">
            <div class="icon mb-4"><span class="flaticon-lawyer"></span></div>
            <div class="media-body">
              <h3 class="heading">Legal Counseling</h3>
              {{-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p> --}}
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="media block-6 d-block text-center">
            <div class="icon mb-4"><span class="flaticon-courthouse"></span></div>
            <div class="media-body">
              <h3 class="heading">Civil Ligitation</h3>
              {{-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p> --}}
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="media block-6 d-block text-center">
            <div class="icon mb-4"><span class="flaticon-handshake"></span></div>
            <div class="media-body">
              <h3 class="heading">Business Law</h3>
              {{-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p> --}}
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
          <div class="media block-6 d-block text-center">
            <div class="icon mb-4"><span class="flaticon-health-insurance"></span></div>
            <div class="media-body">
              <h3 class="heading">Insurance Defense</h3>
              {{-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p> --}}
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


<div class="ftco-section testimony-img" id="ftco-testimony" style="background-image: url({{ URL::asset('client/images/image_8.jpg') }});" data-aos="fade"  data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center heading" data-aos="fade-up">
        <h2>Testimonials</h2>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row d-flex no-gutters">
      <div class="col-lg align-self-sm-end" data-aos="fade-up">
        <div class="testimony">
           <blockquote>
              <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small.&rdquo;</p>
            </blockquote>
            <div class="author d-flex mt-4">
              <div class="image mr-3 align-self-center">
                <img src="{{ URL::asset('client/images/person_1.jpg') }}" alt="">
              </div>
              <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
            </div>
        </div>
      </div>
      <div class="col-lg align-self-sm-end" data-aos="fade-up">
        <div class="testimony overlay">
           <blockquote>
              <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
            </blockquote>
            <div class="author d-flex mt-4">
              <div class="image mr-3 align-self-center">
                <img src="{{ URL::asset('client/images/person_2.jpg') }}" alt="">
              </div>
              <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
            </div>
        </div>
      </div>
      <div class="col-lg align-self-sm-end" data-aos="fade-up">
        <div class="testimony">
           <blockquote>
              <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small  line of blind text by the name. &rdquo;</p>
            </blockquote>
            <div class="author d-flex mt-4">
              <div class="image mr-3 align-self-center">
                <img src="{{ URL::asset('client/images/person_3.jpg') }}" alt="">
              </div>
              <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
            </div>
        </div>
      </div>
      <div class="col-lg align-self-sm-end" data-aos="fade-up">
        <div class="testimony overlay">
           <blockquote>
              <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however.&rdquo;</p>
            </blockquote>
            <div class="author d-flex mt-4">
              <div class="image mr-3 align-self-center">
                <img src="{{ URL::asset('client/images/person_2.jpg') }}" alt="">
              </div>
              <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
            </div>
        </div>
      </div>
      <div class="col-lg align-self-sm-end" data-aos="fade-up">
        <div class="testimony">
          <blockquote>
            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small  line of blind text by the name. &rdquo;</p>
          </blockquote>
          <div class="author d-flex mt-4">
            <div class="image mr-3 align-self-center">
              <img src="{{ URL::asset('client/images/person_3.jpg') }}" alt="">
            </div>
            <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

 <div class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center"  data-aos="fade-up">
        <h2>Free Legal Consultation</h2>
      </div>
    </div>
    <div class="row block-9" data-aos="fade-up">
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
      <div class="col-md-6" data-aos="fade-up" id="map"></div>
    </div>
  </div>
</div>

<div class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center"  data-aos="fade-up">
        <h2>Our Blog</h2>
      </div>
    </div>
    <div class="row" data-aos="fade-up">
        @if(count($posts) > 0)
            <div class="carousel owl-carousel ftco-owl">
                @foreach($posts as $post)
                    <div class="item">
                        <div class="blog-entry" data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ URL('/blog/'.$post->id) }}" class="block-20" style="background-image: url({{ URL::asset('/storage/cover_images/'. $post->cover_img) }});">
                        </a>
                        <div class="text">
                            <h3 class="heading"><a href="{{ URL('/blog/'.$post->id) }}">{{ $post->topic }}</a></h3>
                            <div class="meta">
                            <div><a href="#"><span class="icon-calendar"></span> {{ $post->created_at }} </a></div>
                            <div><a href="#"><span class="icon-person"></span>{{ $post->user->name }} </a></div>
                            <div><a href="#"><span class="icon-chat"></span> {{ $post->views }} </a></div>
                            </div>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="col-sm-12"><h4 class="text-center"><strong>We are still working on our thoughts, Kindly check back!</strong></h4></div>
        @endif
    </div>
  </div>
</div>
@endsection
