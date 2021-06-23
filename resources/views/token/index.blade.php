{{--@extends('layouts.app')

@section('content')
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <div class="container home-page">
        <div class="row">
            <div class="col-md-12" style="border-color: blue">
                <div class="card" style="border-color: blue">
                    <div class="card-body">
                        <h1 class="text-center" style="color: blue">COMING SOON</h1>
<div class="container py-3">

    <main>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            @foreach($tokens as $token)
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-primary">
                    <div class="card-header py-3 text-white bg-primary border-primary">
                        <h4 class="my-0 fw-normal">{{ $token->name }}</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">{{ $token->price }} ETH</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Hash:   {{ $token->hash }}</li>
                            <li>Prev: {{ $token->prev }}</li>
                            <li>Data: {{ $token->data }}</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">BUYS</button>
                    <div>
                </div>
            </div>
                    <hr>                    @endforeach
        </div>
        <h2 class="display-6 text-center mb-4">Compare plans</h2>

        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                <tr>
                    <th style="width: 34%;"></th>
                    <th style="width: 22%;">Free</th>
                    <th style="width: 22%;">Pro</th>
                    <th style="width: 22%;">Enterprise</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row" class="text-start">Public</th>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                </tr>
                <tr>
                    <th scope="row" class="text-start">Private</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                </tr>
                </tbody>

                <tbody>
                <tr>
                    <th scope="row" class="text-start">Permissions</th>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                </tr>
                <tr>
                    <th scope="row" class="text-start">Sharing</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                </tr>
                <tr>
                    <th scope="row" class="text-start">Unlimited members</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                </tr>
                <tr>
                    <th scope="row" class="text-start">Extra security</th>
                    <td></td>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>
                    </div>
                </div>
            </div>
        </div>
</div>

    @endsection--}}
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
                            @foreach($tokens->chunk(5) as $three)
                                <div class="card border-primary">
                                    <div class="row">
                                        @foreach($three as $token)
                                            <div class="col-3">
                                                <div class="card-header bg-primary">
                                                   <h2>{{ $token->name }}</h2>
                                                </div>
                                               <div class="card-body border-secondary">
                                                  <h3>Hash:</h3>   <small>{{ $token->hash }}</small>
                                                   <hr>
                                                   <h3>Prev:</h3> <small>{{ $token->prev }}</small><hr>
                                                   <img src="{{asset('images/nft_token.png')}}" width="100" height="100"
                                                        class="img-circle" alt="Link picture">
                                                   <hr>
                                                  <h2>{{ $token->price }} ETH</h2>
                                               </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
