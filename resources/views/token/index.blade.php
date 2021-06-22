@extends('layouts.app')

@section('content')
    <div class="container home-page">
        <div class="row">
            <div class="col-md-12" style="border-color: blue">
                <div class="card" style="border-color: blue">
                    <div class="card-body">
                        <h1 class="text-center" style="color: blue">COMING SOON</h1>
                        <h2 class="text-center" style="color: blue">NFT TOKENS</h2>
                        <hr>
                        <div class="text-center">
                            @if (Auth::check())
                                <a href="{{ route('token/create') }}" class="btn btn-primary m-2">Create Token</a>
                            @endif
                        </div>
                        <div class="text-center">
                            @foreach($tokens->chunk(6) as $three)
                                @foreach($three as $token)
                                  Token: {{ $token }}
                                @endforeach
                                    <br><hr>
                            @endforeach
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
