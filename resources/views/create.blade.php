@extends('master');
@section('title') Create Post @endsection
@section('content')
    <div class="container">
        <div class="col-12 ">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="text-primary">Create Post</h4>
                        <a href="{{ route('post.index') }}" class="btn btn-primary">Home</a>
                    </div>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error )
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('post.store') }}" method="post">
                        @csrf
                        <div class="from-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                           
                        </div>
                        <div class="from-group">
                            <label for="">Description</label>
                            <textarea type="text" class="form-control"rows="10" name="description" required></textarea>
                        </div>
                        <div class="m-3 text-center ">
                            <button class="btn btn-primary p-2">Add Post</button>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
@endsection