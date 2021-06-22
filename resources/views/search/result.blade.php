@extends('layouts.app')

@section('content')
    <h3 class="text-center">Your search for "{{ Request::input('query') }}"</h3>
    <hr>
    <div class="text-center">
        @if (!$links->count())
            <p>No results found, sorry.</p>
        @else
            <div class="row">
                <div class="col-lg-12">
                    @foreach ($links as $link)
                        <img src="{{asset('images/'.$link->picture)}}" width="100" height="100" class="img-circle" alt="Link picture" target="_blank">
                        <a href="http://{{ $link->link }}">{{ $link->description }}</a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@stop

