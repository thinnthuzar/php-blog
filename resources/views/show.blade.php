@extends('master');
@section('title') $post->id @endsection
@section('content')
    <div class="container">
        <div class="col-12 ">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="text-primary">Home</h4>
                        <a href="{{ route('post.create') }}" class="btn btn-primary">Create</a>
                    </div>

                   
                   
                </div>
            </div>
           
                
            
                <div class="card mb-3 p-2 d-flex ">
                   
                        <div class="">
                            <h4 class="card-title">{{ $post->title }}</h4>
                        <p class="card-text fw-50">{{ $post->description }}</p>
                        </div>
                   
                    
                </div>
            
            
        </div>
    </div>
@endsection