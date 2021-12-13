<section id="navbar">
    <div class="container-fluid">
        <div class="upper-navbar">
            <ul class="up-nav">
                <li class="nav-item">
                    <a href="tel:9846856417"><i class="fas fa-phone mx-2"></i>9846856417</a>
                    <a href="email:ewsNepal@gmail.com"><i class="far fa-envelope mx-2"></i>ewsnepal@gmail.com</a>

                </li>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-custom navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ env('APP_URL') }}">
                <img width="60" height="60" style="object-fit:cover" src="{{ env('APP_URL') }}/storage/{{ Voyager::setting("site.logo") }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto me-2">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link mx-3" href="{{ env('APP_URL') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link me-2" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                About Us
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ env("APP_URL") }}/about">About</a></li>
                                <li><a class="dropdown-item" href="{{ env('APP_URL') }}/company-overview">Company Overview</a></li>
                                <li><a class="dropdown-item" href="{{ env('APP_URL') }}/gallery">Gallery</a></li>
                                <li><a class="dropdown-item" href="{{ env('APP_URL') }}/team">EWS Team</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Projects
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ env('APP_URL') }}/portfolio-completed">Completed</a></li>
                                <li><a class="dropdown-item" href="{{ env('APP_URL') }}/portfolio-ongoing">Ongoing</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-3" href="{{ env('APP_URL') }}/news-and-notice">News & Notice</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-3" href="{{ env('APP_URL') }}/contact">Contact Us</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>
</section>
