<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="container">
                    <div class="row">
                        @if (count($pageArray) > 0)
                            @if ($pageArray[0]->picture != null)
                                <div class="col-md-8 mb-5">
                                    <div>
                                        <img class="w-100" style="height:300px;object-fit:cover;"
                                            src="{{ env('APP_URL') }}/storage/{{ $pageArray[0]->picture }}"
                                            alt="news thumbnail" />
                                        <div class="d-flex align-items-center mt-4">
                                            <p class="m-0 me-3 fw-bold fs-4">By Admin</p>
                                            <p class="m-0">
                                                {{ \Carbon\Carbon::parse($pageArray[0]->created_at)->format('M d Y') }}
                                            </p>
                                        </div>
                                        <div>
                                            <p>
                                                {!! $pageArray[0]->description !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @elseif ($pageArray[0]->file != null)
                                <div class="col-md-8 mb-5">
                                    <div>
                                        <a href="{{ env('APP_URL') }}/storage/{{ json_decode($pageArray[0]->file, true)[0]['download_link'] }}"
                            class="btn btn-sm btn-dark text-white">Download</a>
                                        <div class="d-flex align-items-center mt-4">
                                            <p class="m-0 me-3 fw-bold fs-4">By Admin</p>
                                            <p class="m-0">
                                                {{ \Carbon\Carbon::parse($pageArray[0]->created_at)->format('M d Y') }}
                                            </p>
                                        </div>
                                        <div>
                                            <p>
                                                {!! $pageArray[0]->description !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-md-8 mb-5">
                                    <div>
                                        <div class="d-flex align-items-center mt-4">
                                            <p class="m-0 me-3 fw-bold fs-4">By Admin</p>
                                            <p class="m-0">
                                                {{ \Carbon\Carbon::parse($pageArray[0]->created_at)->format('M d Y') }}
                                            </p>
                                        </div>
                                        <div>
                                            <p>
                                                {!! $pageArray[0]->description !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @else
                            <div class="col-md-4 mb-5">
                                <h3>No Data found</h3>
                            </div>
                        @endif
                    </div>

                </div>
            </div>
            @include('components.notice')
        </div>
    </div>
    </div>

</section>
