@extends('layouts.client')

@section('content')
<!-- Home -->

<div class="home">
    <!-- Background image artist https://unsplash.com/thepootphotographer -->
    <div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ URL::asset('client/images/news.jpg') }}" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title">News</div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ URL('/') }}">Home</a></li>
                                <li>News</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- News -->

<div class="news">
    <div class="container">
        <div class="">

            <!-- News Posts -->
            <div class="">
                <div class="news_posts row">


                    @if(count($posts) > 0)
                        @foreach($posts as $post)
                            <!-- News Post -->
                            <div class="news_post col-md-6">
                                <div class="news_post_image"><img src="{{ URL::asset('/storage/cover_images/'. $post->cover_img) }}" alt=""></div>
                                <div class="news_post_body">
                                    <div class="news_post_date"><a href="#">April 02, 2018</a></div>
                                    <div class="news_post_title"><a href="{{ URL('/posts/'.$post->id) }}">{{ $post->topic }}</a></div>
                                    <div class="news_post_meta d-flex flex-row align-items-start justify-content-start">
                                        <div class="news_post_author">By <a href="#">{{ $post->category->name }}</a></div>
                                        <div class="news_post_comments"><a href="#">{{ $post->views }} Views</a></div>
                                        {{-- <div class="news_post_tags">
                                            <span>in </span>
                                            <ul>
                                                <li><a href="#">Social Media</a></li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                    <div class="news_post_text">
                                        <p>{{ $post->brief }}</p>
                                    </div>
                                    <div class="news_post_link"><a href="{{ URL('/posts/'.$post->id) }}">Read More</a></div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-sm-12"><h4 class="text-center"><strong>We are still working on our post, Kindly check back!</strong></h4></div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col">
                <div class="news_pagination">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ URL::asset('client/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('client/plugins/video-js/video-js.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/styles/news.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/styles/news_responsive.css') }}">
@endsection

@section('scripts')
    <script src="{{ URL::asset('client/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ URL::asset('client/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ URL::asset('client/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('client/plugins/easing/easing.js') }}"></script>
    <script src="{{ URL::asset('client/plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="{{ URL::asset('client/js/news.js') }}"></script>
@endsection
