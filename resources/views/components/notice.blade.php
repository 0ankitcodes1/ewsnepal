<div class="col-md-4">
    <div class="card" style="width: 20rem;">
        <div class="card-body">
            <h4 class="card-title"><a href="{{ env('APP_URL') }}/notice">Notice</a></h4>
            @php
                $notices = \App\Models\Notice::limit(4)->get();
            @endphp
            @if (count($notices) > 0)
                @foreach ($notices as $notice)
                <hr>
                    @if ($notice->picture != null)
                        <div class="d-flex">
                            <a class='me-3' href="{{ env('APP_URL') }}/storage/{{ $notice->picture }}"
                                target="_blank">
                                <img width="60" height="60" style="object-fit:cover;"
                                    src="{{ env('APP_URL') }}/storage/{{ $notice->picture }}" alt="notice image" />
                            </a>
                            <div>
                                <a href="{{ env('APP_URL') }}/notice/{{ $notice->id }}"><h4 class="fs-4 m-0">{{ $notice->title }}</h4></a>
                                <div class="m-0">
                                    {!! substr($notice->description, 0, 300) !!}...
                                </div>
                            </div>
                        </div>
                    @elseif ($notice->file != null)
                        <a href="{{ env('APP_URL') }}/notice/{{ $notice->id }}"><h4 class="fs-4 m-0">{{ $notice->title }}</h4></a>
                        <div>
                            {!! substr($notice->description, 0, 300) !!}...
                        </div>
                        {{-- <a href="{{ env('APP_URL') }}/storage/{{ json_decode($notice->file, true)[0]['download_link'] }}"
                            class="btn btn-sm btn-dark text-white">Download</a> --}}
                    @else
                        <a href="{{ env('APP_URL') }}/notice/{{ $notice->id }}"><h4 class="fs-4 m-0">{{ $notice->title }}</h4></a>
                        <div>
                            {!! $notice->description !!}
                        </div>
                    @endif
                @endforeach
            @else
            @endif
        </div>
    </div>

</div>
