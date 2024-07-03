@extends('master');
@section('title') Sample Blog @endsection
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
            @if (session('status'))
                <div class="alert alert-success">{{ session("status") }}</div>
                
            @endif
            @foreach ($posts as $p)
                <div class="card mb-3 p-2 d-flex ">
                    <div class="">
                        <h4 class="card-title">{{ $p->title }}</h4>
                    <p class="card-text fw-50">{{ $p->description }}</p>
                    <p class="text-primary">{{ $p->created_at->format('j F Y | i : m A') }}</p>
                    </div>
                   
                    <div class="text-right ">
                        <form action="{{ route('post.delete',$p->id) }}" method="post" class="d-inline-block">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" >Delete</button>
                        </form>
                        <a href="{{ route('post.show',$p->id) }}" class="btn btn-outline-primary">See More </a> 
                        <a href="{{ route('post.edit',$p->id) }}" class="btn btn-outline-success">Update </a>
                    </div>
                </div>
            @endforeach
            
            <div class="">
                {{ $posts->links() }}
            </div>

        </div>
    </div>
@endsection