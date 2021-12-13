@extends('layouts.page')
@section('content')
    <!-- section main -->
    <section class="intro-section">
        <div class="container">
            <!-- Foreach -->
            @php
                $galleries = \App\Models\Gallery::get();
            @endphp
            @if (count($galleries) > 0)
                @foreach ($galleries as $img)
                    <div class="owl-carousel owl-theme img-owl">
                        <div class="item">
                            <img src="{{ env('APP_URL') }}/storage/{{ $img->file }}" alt=""
                                class="fit-img-size rounded" />
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>

    <!-- section introduction -->
    <section class="intro">
        <div class="container">
            <div class="row flex-row-md-reverse">
                <div class="col-lg-6">
                    <div class="img-wrap">
                        <div class="back-img"></div>
                        <div class="img">
                            <img src="{{ asset('image/test.jpg') }}" class="img-fluid" alt="image" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 intro-sec mt-4">
                    <h1>Introduction</h1>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                        enim et maxime quis a odio magnam molestias temporibus animi doloribus
                        obcaecati cumque eos ipsa in earum explicabo minima, nulla, dolore
                        perferendis architecto repellendus recusandae possimus atque
                        reiciendis? Reiciendis, voluptatibus ut?
                    </p>
                </div>
            </div>
            <div class="row flex-row-reverse">
                <div class="col-lg-6">
                    <div class="img-wrap">
                        <div class="back-img"></div>
                        <div class="img">
                            <img src="{{ asset('image/test.jpg') }}" class="img-fluid" alt="image" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 intro-sec mt-4">
                    <h1>Lorem, ipsum dolor</h1>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                        enim et maxime quis a odio magnam molestias temporibus animi doloribus
                        obcaecati cumque eos ipsa in earum explicabo minima, nulla, dolore
                        perferendis architecto repellendus recusandae possimus atque
                        reiciendis? Reiciendis, voluptatibus ut?
                    </p>
                </div>
            </div>
        </div>
    </section>



    <section id="blogs" class="mt-5">
        <div class="container">
            <div class="heading">
                <h1 class="text-center section-head">Latest News</h1>
            </div>
            <div class="row">
                @php
                    $news = \App\Models\News::limit(4)->get();
                @endphp
                @if (count($news) > 0)
                    @foreach ($news as $post)
                        <div class="col-md-4">
                            <div class="card news-card">
                                <img class="card-img-top" src="{{ env('APP_URL') }}/storage/{{ $post->file }}"
                                    alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ $post->title }}</h5>
                                    <p class="card-text">{!! substr($post->description, 0, 300) !!} . . .</p>
                                    <div class="text-center">
                                        <a href="{{ env('APP_URL') }}/news/{{ $post->id }}"
                                            class="btn read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <div class="heading">
                <h1 class="text-center section-head">Recent Projects</h1>
            </div>
            <div class="row">
                @php
                    $projects = \App\Models\Portfolio::limit(4)->get();
                @endphp
                @if (count($projects) > 0)
                    @foreach ($projects as $post)
                        <div class="col-md-4">
                            <div class="card news-card">
                                <img class="card-img-top" src="{{ env('APP_URL') }}/storage/{{ $post->file }}"
                                    alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ $post->title }}</h5>
                                    <p class="card-text">
                                        {!! substr($post->description, 0, 300) !!} . . .
                                    </p>
                                    <div class="text-center">
                                        <a href="{{ env('APP_URL') }}/portfolio/{{ $post->id }}"
                                            class="btn read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
@stop
