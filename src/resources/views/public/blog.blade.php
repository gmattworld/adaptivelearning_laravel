@extends('layouts.client')

@section('content')

  <div class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <p>
            <img src="{{ URL::asset('/storage/cover_images/'. $post->cover_img) }}" alt="" class="img-fluid">
          </p>
          <h2 class="mb-3">{{ $post->topic }}</h2>
          <hr />
          <div><span class="icon-calendar"></span> {{ $post->created_at }} | <span class="icon-person"></span> {{ $post->user->name }} </div>
          <hr />
          <div class="text-justify">
                {!! $post->body !!}
          </div>

          {{-- <div class="about-author d-flex pt-5">
            <div class="bio align-self-md-center mr-4">
              <img src="{{ URL::asset('client/images/person_1.jpg') }}" alt="Image placeholder" class="img-fluid mb-4">
            </div>
            <div class="desc align-self-md-center">
              <h3>About The Author</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div> --}}

      </div>
    </div>
  </div> <!-- .section -->

@endsection
