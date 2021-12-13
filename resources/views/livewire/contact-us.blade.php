<section>

    <section id="bredcrumb">
        <div class="bredcrumb-content">
            <h1 class="text-white text-center pt-4">Contact Us</h1>
        </div>
        <div class="container">
            <ul class="breadcrumb mt-3">
                <li><a href="{% url 'home' %}">Home</a></li>
                <li><a href="#" class="active">Contact Us</a></li>
            </ul>
        </div>
        <hr>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-3">
                <div>
                    @if (session()->has('page-message'))
                        <div class="alert alert-success rounded-0 alert-dismissible fade show mt-3" role="alert">
                            {{ session('page-message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                </div>

                <h2 class="custom-fs-36 custom-text-black custom-fw-700 my-3"> Leave
                    message Here:</h2>
                <form wire:submit.prevent="save" class="row">
                    <div class="form-wrap col-md-6 mb-3">
                        <input wire:model="name" type="text"
                            class="form-control p-3 rounded-0 @error('name') border-danger @enderror" required
                            placeholder="Name">
                        @error('name')
                            <span class="d-block fs-6 m-0 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-wrap col-md-6 mb-3">
                        <input wire:model="email" type="email"
                            class="form-control  p-3 rounded-0 @error('email') border-danger @enderror"
                            placeholder="Email Address">
                        @error('email')
                            <span class="d-block fs-6 m-0 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-wrap col-md-12 mb-3">
                        <input wire:model="subject" type="text"
                            class="form-control  p-3 rounded-0 @error('subject') border-danger @enderror"
                            placeholder="Subject">
                        @error('subject')
                            <span class="d-block fs-6 m-0 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-wrap col-md-12 mb-3">
                        <div class="form-floating">
                            <textarea wire:model="comment"
                                class="form-control  p-3  rounded-0 @error('comment') border-danger @enderror"
                                placeholder="Leave a comment here..." style="height: 120px"></textarea>
                        </div>
                        @error('comment')
                            <span class="d-block fs-6 m-0 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                @include('components.notice')
            </div>
        </div>

</section>
