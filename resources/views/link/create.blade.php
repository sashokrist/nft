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
                        <h2 class="text-center">{{ auth()->user()->name }} Create Link</h2>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('link/store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="link">Add Link</label>
                                <input type="text" class="form-control" id="link" name="link"  placeholder="http://">
                            </div>
                            <div class="form-group">
                                <textarea name="description" id="description" cols="40" rows="5" placeholder="Enter link description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="link-picture">Add Link picture</label>
                                <input type="file" class="form-control" id="link-picture" name="picture">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
