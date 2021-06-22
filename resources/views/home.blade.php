@extends('layouts.app')

<style>
    .box {
        display: none;
        width: 100%;
    }

    a:hover + .box, .box:hover {
        display: block;
        position: relative;
        z-index: 100;
    }
</style>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="border-color: blue">
                    <div class="card-header">
                        <h2 class="text-center" style="color: blue">
                            Welcome {{ auth()->user()->name }}
                        </h2>
                    </div>
                    <a href="{{ route('link/create') }}" class="btn btn-primary m-2">Create Link</a>
                    <div class="card-body">
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <div class="col-md-10">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Picture</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($links as $link)
                                    <tr>
                                        <td>
                                            <a href="{{ $link->link }}"
                                               target="_blank">
                                            <img src="{{asset('images/'.$link->picture)}}" width="100" height="100"
                                                 class="img-circle" alt="Link picture"></a>
                                        </td>
                                        <td>
                                            @if (strpos($link->link, "https://") === 0)
                                                <a href="{{ $link->link }}" target="_blank">
                                                    {{ $link->description }}</a>
                                            @else
                                                <a href="https://{{ $link->link }}" target="_blank">
                                                    {{ $link->description }}</a>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('link/delete') }}" method="post">
                                                @csrf
                                                <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
                                                <button type="submit" class="btn btn-danger pull-right">Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

