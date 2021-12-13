@extends('layouts.page')
@section('content')
    @if (Request::path())
        @php $page = explode('/', Request::path()); @endphp
        @if ($page[0] == 'about')
            <section>
                <section id="bredcrumb">
                    <div class="bredcrumb-content">
                        <h1 class="text-white text-center pt-4">About Us</h1>
                    </div>
                    <div class="container">
                        <ul class="breadcrumb mt-3">
                            <li><a href="{{ env('APP_URL') }}">Home</a></li>
                            <li><a href="#" class="active">About Us</a></li>
                        </ul>
                    </div>
                    <hr>
                </section>
                <section id="about-us">
                    <div class="container">
                        @php
                            $about = \App\Models\About::first();
                        @endphp
                        @if ($about->exists())
                            <div class="row flex-row-reverse">
                                <div class="col-lg-6">
                                    <div class="img-wrap">
                                        <div class="back-img">
                                        </div>
                                        <div class="img">
                                            <img src="{{ env('APP_URL') }}/storage/{{ $about->file }}"
                                                class="img-fluid" alt="about image" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 intro-sec mt-4">
                                    <h1>{{ $about->title }}</h1> <br>
                                    {!! $about->description !!}
                                </div>
                            </div>
                        @else
                        @endif
                    </div>
                </section>
            </section>


        @elseif ($page[0] == "company-overview")
            <section>

                <section id="bredcrumb">
                    <div class="bredcrumb-content">
                        <h1 class="text-white text-center pt-4">Company Overview</h1>
                    </div>
                    <div class="container">
                        <ul class="breadcrumb mt-3">
                            <li><a href="{{ env('APP_URL') }}">Home</a></li>
                            <li><a href="#" class="active">Company Overview</a></li>
                        </ul>
                    </div>
                    <hr>
                </section>

                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <section id="content mt-5">
                                <div class=" about-us-content mt-5">
                                    <h4 class="about-us-title">Company in Brief <br> </h4>

                                    <table class="table border table-bordered">
                                        <tr>
                                            <td class="leftside">Name of Firm </td>
                                            <td>Some quick example text to build.</td>
                                        </tr>
                                        <tr>
                                            <td class="leftside">Legal Status </td>
                                            <td>Some quick example text to build.</td>
                                        </tr>
                                        <tr>
                                            <td class="leftside">Nature of Business </td>
                                            <td>Some quick example text to build.</td>
                                        </tr>
                                        <tr>
                                            <td class="leftside">Name of Firm </td>
                                            <td>Some quick example text to build.</td>
                                        </tr>
                                        <tr>
                                            <td class="leftside ">Legal Status </td>
                                            <td>Some quick example text to build.Some quick example text to build.</td>
                                        </tr>
                                        <tr>
                                            <td class="leftside">Nature of Business </td>
                                            <td>Some quick example text to build.</td>
                                        </tr>
                                        <tr>
                                            <td class="leftside">Name of Firm </td>
                                            <td>Some quick example text to build.</td>
                                        </tr>
                                        <tr>
                                            <td class="leftside">Legal Status </td>
                                            <td>Some quick example text to build.</td>
                                        </tr>
                                        <tr>
                                            <td>Nature of Business </td>
                                            <td>Some quick example text to build.Some quick example text to build.</td>
                                        </tr>
                                    </table>

                                </div>
                            </section>
                        </div>
                        @include('components.notice')
                    </div>
                </div>
            </section>
        @elseif ($page[0] == "gallery")
            <section>
                <section id="bredcrumb">
                    <div class="bredcrumb-content">
                        <h1 class="text-white text-center pt-4">Gallery</h1>
                    </div>
                    <div class="container">
                        <ul class="breadcrumb mt-3">
                            <li><a href="{{ env('APP_URL') }}">Home</a></li>
                            <li><a href="#" class="active">Gallery</a></li>
                        </ul>
                    </div>
                    <hr>
                </section>
                <section class="gallery min-vh-100">
                    <div class="container-lg">
                        <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                            @php
                                $images = \App\Models\Gallery::get();
                            @endphp
                            @if (count($images) > 0)
                                @foreach ($images as $img)
                                    <div class="col">
                                        <a href="{{ env('APP_URL') }}/storage/{{ $img->file }}" target="_blank">
                                            <img src="{{ env('APP_URL') }}/storage/{{ $img->file }}"
                                                class="gallery-item" alt="gallery" />

                                            <p class="m-0 text-dark text-decoration-none">{{ $img->title }}</p>
                                        </a>
                                    </div>
                                @endforeach
                            @else
                                <div class="col">
                                    <h3>No Image found</h3>
                                </div>
                            @endif

                        </div>
                    </div>
                    </div>
                </section>
                <!-- modal -->
            </section>
        @elseif ($page[0] == "team")
            <section>

                <section id="bredcrumb">
                    <div class="bredcrumb-content">
                        <h1 class="text-white text-center pt-4">EWS Team</h1>
                    </div>
                    <div class="container">
                        <ul class="breadcrumb mt-3">
                            <li><a href="{% url 'home' %}">Home</a></li>
                            <li><a href="#" class="active">EWS Team</a></li>
                        </ul>
                    </div>
                    <hr>
                </section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="container">
                                <div class="row">
                                    @php
                                        $teams = \App\Models\Team::get();
                                    @endphp
                                    @if (count($teams) > 0)
                                        @foreach ($teams as $team)
                                            <div class="col-md-6 mb-5">
                                                <div style="max-width:300px;"
                                                    class="card our_team_card d-flex align-items-center py-4">
                                                    <img width="100" height="100"
                                                        src="{{ env('APP_URL') }}/storage/{{ $team->file }}"
                                                        class="rounded-circle" alt="team member image">
                                                    <div class="card-body text-center">
                                                        <h4 class="custom-text-black custom-fs-22 custom-fw-700">
                                                            {{ $team->name }}</h4>
                                                        <p class="custom-fs-16 custom-text-gray m-0">
                                                            {{ $team->position }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="col-md-6 mb-5">
                                            <h3>No team member added</h3>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>


            </section>
        @elseif ($page[0] == "portfolio-completed")
            <section>
                <section id="bredcrumb">
                    <div class="bredcrumb-content">
                        <h1 class="text-white text-center pt-4">Completed Projects</h1>
                    </div>
                    <div class="container">
                        <ul class="breadcrumb mt-3">
                            <li><a href="{{ env('APP_URL') }}">Home</a></li>
                            <li><a href="#" class="active">Completed Projects</a></li>
                        </ul>
                    </div>
                    <hr>
                </section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                @php
                                    $works = \App\Models\Portfolio::where('complete', '1')->get();
                                @endphp
                                @if (count($works) > 0)
                                    @foreach ($works as $work)
                                        <div class="col-md-6 mb-5">
                                            <div class="card our_team_card">
                                                <img src="{{ env('APP_URL') }}/storage/{{ $work->file }}"
                                                    class="card-img-top" alt="...">
                                                <div class="card-body text-center">
                                                    <a
                                                        href="{{ env('APP_URL') }}/portfolio/{{ $work->id }}">
                                                        <h4 class="custom-text-black custom-fs-22 custom-fw-700">
                                                            {{ $work->title }}</h4>
                                                    </a>
                                                    <p class="custom-fs-16 custom-text-gray">
                                                        {!! substr($work->description, 0, 300) !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-md-6 mb-5">
                                        <h3>Project Not Found</h3>
                                    </div>
                                @endif

                            </div>
                        </div>
                        <div class="col-md-4">
                            @include('components.notice')
                        </div>
                    </div>
                </div>
            </section>
        @elseif ($page[0] == "portfolio-ongoing")
            <section>
                <section id="bredcrumb">
                    <div class="bredcrumb-content">
                        <h1 class="text-white text-center pt-4">Ongoing Projects</h1>
                    </div>
                    <div class="container">
                        <ul class="breadcrumb mt-3">
                            <li><a href="{{ env('APP_URL') }}">Home</a></li>
                            <li><a href="#" class="active">Ongoing Projects</a></li>
                        </ul>
                    </div>
                    <hr>
                </section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                @php
                                    $works = \App\Models\Portfolio::where('complete', '0')->get();
                                @endphp
                                @if (count($works) > 0)
                                    @foreach ($works as $work)
                                        <div class="col-md-6 mb-5">
                                            <div class="card our_team_card">
                                                <img src="{{ env('APP_URL') }}/storage/{{ $work->file }}"
                                                    class="card-img-top" alt="...">
                                                <div class="card-body text-center">
                                                    <a
                                                        href="{{ env('APP_URL') }}/portfolio/{{ $work->id }}">
                                                        <h4 class="custom-text-black custom-fs-22 custom-fw-700">
                                                            {{ $work->title }}</h4>
                                                    </a>
                                                    <p class="custom-fs-16 custom-text-gray">
                                                        {!! substr($work->description, 0, 300) !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-md-6 mb-5">
                                        <h3>Project Not Found</h3>
                                    </div>
                                @endif

                            </div>
                        </div>
                        <div class="col-md-4">
                            @include('components.notice')
                        </div>
                    </div>
                </div>
            </section>
        @elseif ($page[0] == "news-and-notice")

            <section id="bredcrumb">
                <div class="bredcrumb-content">
                    <h1 class="text-white text-center pt-4">News&Notice</h1>
                </div>
                <div class="container">
                    <ul class="breadcrumb mt-3">
                        <li><a href="{% url 'home' %}">Home</a></li>
                        <li><a href="#" class="active">News&Notice</a></li>
                    </ul>
                </div>
                <hr>
            </section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="container">
                            <div class="row">

                                @php
                                    $works = \App\Models\News::get();
                                @endphp
                                @if (count($works) > 0)
                                    @foreach ($works as $work)
                                        <div class="col-md-6 mb-5">
                                            <div class="card blog-card">
                                                <div class="img-wrap">
                                                    <img src="{{ env('APP_URL') }}/storage/{{ $work->file }}"
                                                        class="card-img-top" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <p class="custom-text-light custom-fs-13">By <span
                                                            class="custom-text-primary custom-fw-600">Admin</span> |
                                                        <span>{{ \Carbon\Carbon::parse($work->created_at)->format('M d Y') }}</span>
                                                    </p>
                                                    <a href="#"
                                                        class="card-head custom-fs-26 my-2 custom-fw-700 custom-text-black">
                                                        <h4 class="article-head">{{ $work->title }}</h4>
                                                    </a>
                                                    <div>
                                                        <a href="{{ env('APP_URL') }}/news/{{ $work->id }}"
                                                            class="btn read-more">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-md-6 mb-5">
                                        <h3 class="mb-3">No news uploaded found</h3>
                                    </div>

                                @endif

                            </div>

                        </div>
                    </div>
                    @include('components.notice')
                </div>
            </div>
            </div>
        @elseif ($page[0] == "notice")
            <section>
                <section id="bredcrumb">
                    <div class="bredcrumb-content">
                        <h1 class="text-white text-center pt-4">Notice</h1>
                    </div>
                    <div class="container">
                        <ul class="breadcrumb mt-3">
                            <li><a href="{{ env('APP_URL') }}">Home</a></li>
                            <li><a href="#" class="active">Notice</a></li>
                        </ul>
                    </div>
                    <hr>
                </section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                @php
                                    $works = \App\Models\Notice::get();
                                @endphp
                                @if (count($works) > 0)
                                    @foreach ($works as $work)
                                        @if ($work->picture != null)
                                            <div class="col-md-6 mb-5">
                                                <div class="card our_team_card">
                                                    <img src="{{ env('APP_URL') }}/storage/{{ $work->picture }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body text-center">
                                                        <a
                                                            href="{{ env('APP_URL') }}/notice/{{ $work->id }}">
                                                            <h4 class="custom-text-black custom-fs-22 custom-fw-700">
                                                                {{ $work->title }}</h4>
                                                        </a>
                                                        <p class="custom-fs-16 custom-text-gray">
                                                            {!! substr($work->description, 0, 300) !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-md-6 mb-5">
                                                <div class="card our_team_card">
                                                    <div class="card-body text-center">
                                                        <a
                                                            href="{{ env('APP_URL') }}/notice/{{ $work->id }}">
                                                            <h4 class="custom-text-black custom-fs-22 custom-fw-700">
                                                                {{ $work->title }}</h4>
                                                        </a>
                                                        <p class="custom-fs-16 custom-text-gray">
                                                            {!! substr($work->description, 0, 300) !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @else
                                    <div class="col-md-6 mb-5">
                                        <h3>Notice not found</h3>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @elseif ($page[0] == "contact")
            <livewire:contact-us />
        @elseif ($page[0] == "notice")
        @endif
    @endif
@stop
