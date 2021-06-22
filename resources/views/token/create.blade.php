@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card-header">
                    <h1 class="text-center" style="color: blue">COMING SOON</h1>
                    <h2 class="text-center">{{ auth()->user()->name }} Create Token</h2>
                </div>

                <div class="card-body">
                    <form action="{{ route('token/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Add name</label>
                            <input type="text" class="form-control" id="name" name="name"  placeholder="Sasho Token">
                        </div>
                        <div class="form-group">
                            <label for="hash">Add hash</label>
                            <input type="text" class="form-control" id="hash" name="hash"  placeholder="3C9DEF41D99A7A3B80EC83F342B774D60BFEC5E51EB675737F6E63BDCF37F02A">
                        </div>
                        <div class="form-group">
                            <label for="prev">prev</label>
                            <input type="text" class="form-control" id="prev" name="hash" value="3C9DEF41D99A7A3B80EC83F342B774D60BFEC5E51EB675737F6E63BDCF37F02A">
                        </div>
                        <div class="form-group">
                            <label for="data">data</label>
                            <input type="file" class="form-control" id="data" name="data">
                        </div>
                        <div class="form-group">
                            <label for="price">Add price</label>
                          <input type="text" class="form-control" id="price" name="price" placeholder="ETH:">
                        </div>
                        <button type="submit" class="btn btn-primary">Create Token</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
