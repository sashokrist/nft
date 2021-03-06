@extends('layouts.app')

@section('content')
    <div class="container home-page">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="border-color: blue">
                    <div class="card-body">
                        <h1 class="text-center" style="color: blue">WELCOME TO NFTUBES</h1>
                        <h3 class="text-center">This is the place to share your NFT tokens</h3>
                        <hr>
                        <div class="text-center">
                            @foreach($linkss->chunk(4) as $three)
                                <div class="card border-primary">
                                    <div class="row">
                                        @foreach($three as $link)
                                            <div class="col-3">
                                                <div class="card-header">
                                                    <h2> <a href="https://{{ $link->link }}" target="_blank">
                                                            {{ $link->title }}</a></h2>
                                                </div>
                                                <div class="card-body border-secondary">
                                                        <a href="https://{{ $link->link }}" target="_blank">
                                                            <img src="{{asset('images/'.$link->picture)}}" width="100" height="100"
                                                                 class="img-circle" alt="Link picture"></a>
                                                    <p class="m-2"> {{ $link->description }}</p>
                                                    <hr>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <hr style="color: blue">
                        <div class="text-center">
                            <h3>BE YOU BUT ALL WE ARE.</h3>
                            <h4 class="text-center">
                                NFT TUBES allow sharing NFT 'S from all over the world .
                                The idea is that every user who owns nft tokens, no matter what market
                                they are in and what they represent as content , could create a profile
                                on NFT TUBES and share them with the world .
                                Without fees without wallets and settings. Internet is full now with
                                marketplaces for nft tokens .
                                Here anyone can share to search to like or communicate with other nft
                                users.
                                If you want to buy nft token that you liked ,just click on link and go to
                                buy it .
                            </h4>
                        </div>
                        <hr style="color: blue">
                        <div class="text-center">
                            @foreach($linksAll->chunk(6) as $three)
                                <div class="card border-primary">
                                    <div class="row">
                                        @foreach($three as $link)
                                            <div class="col-3">
                                                <div class="card-header">
                                                    <h2> <a href="https://{{ $link->link }}" target="_blank">
                                                            {{ $link->title }}</a></h2>
                                                </div>
                                                <div class="card-body border-secondary">
                                                        <a href="https://{{ $link->link }}" target="_blank">
                                                            <img src="{{asset('images/'.$link->picture)}}" width="100" height="100"
                                                                 class="img-circle" alt="Link picture"></a>
                                                    <p class="m-2"> {{ $link->description }}</p>
                                                    <hr>
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
@endsection


