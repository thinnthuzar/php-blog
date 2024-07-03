@extends('master');
@section('title') $post @endsection
@section('content')
    <div class="container">
        <div class="col-12 ">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="text-primary">Edit Post</h4>
                        <a href="{{ route('post.index') }}" class="btn btn-primary">Home</a>
                    </div>
                    
                    <form action="{{ route('post.update',$post->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="from-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $post->title }}" required>
                        </div>
                        <div class="from-group">
                            <label for="">Description</label>
                            <textarea type="text" class="form-control" rows="10"  name="description"   required>{{ $post->description }}</textarea>
                        </div>
                        <div class="m-3 text-center ">
                            <button class="btn btn-primary p-2">Edit Post</button>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
@endsection