@extends('layouts.page')
@section('content')
    @if (Request::path())
        @php
            $page = explode('news/', Request::path());
            $pageNotice = explode('notice/', Request::path());
            $pagePortfolio = explode('portfolio/', Request::path());
        @endphp
        @if (count($page) > 1)
            <livewire:show-notes :noteid=$page[1] />
        @endif
        @if (count($pageNotice) > 1)
            <livewire:show-notice :noticeid=$pageNotice[1] />
        @endif
        @if (count($pagePortfolio) > 1)
            <livewire:show-portfolio :portfolioid=$pagePortfolio[1] />
        @endif
    @endif
@stop
