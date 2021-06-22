@extends('layouts.app')

@section('content')
    <h1 class="text-center" style="color: red">WELCOME TO NFTUBES</h1>
    <h3 class="text-center" style="color: red">This is the place to share your NFT tokens</h3>
    <hr>
    <div class="text-center">
        @foreach($links->chunk(4) as $three)
            @foreach($three as $link)

                <a href="{{ $link->link }}" target="_blank" >
                    <img src="{{asset('images/'.$link->picture)}}" width="100" height="100" class="img-circle" alt="Link picture">
                    {{ $link->description }}</a>

            @endforeach  <hr>
        @endforeach
    </div>
    <div class="text-center" style="margin-left: 30%">
        <div class="col-6">
            <strong>BE YOU BUT ALL WE ARE.</strong>
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

    </div>

    <div class="text-center">
        @foreach($linksAll->chunk(4) as $three)
            @foreach($three as $link)
                <a href="http://{{ $link->link }}" target="_blank" >
                    <img src="{{asset('images/'.$link->picture)}}" width="100" height="100" class="img-circle" alt="Link picture">
                    {{ $link->description }}</a>
            @endforeach  <hr>
        @endforeach
    </div>
@endsection

