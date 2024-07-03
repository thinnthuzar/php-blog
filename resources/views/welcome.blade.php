{{-- <link rel="stylesheet" href="{{ asset('css/style.css ')}}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<h1>Mingalar pr</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
 Beatae illum maxime deserunt sapiente asperiores deleniti!
  Explicabo a, debitis nesciunt possimus id dolorum optio facere vel cumque inventore, voluptatem, esse aut?</p>


<p>I am {{ $name }} and {{ $age }} years old</p>
{!! '<h1>Hello </h1>' !!}
{{-- {!! "<script>alert('hello')</script>" !!} --}}
{{-- <img class="w-25" src="{{ asset('me.jpg') }}" alt="">
@php
    $arr =["apple","orange","mango"];
@endphp --}}
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
{{-- @if (true)
 <h4>This is true</h4>
@endif

@for ($i=0;$i<=10;$i++)
    <p>This is {{ $i }} times</p>   
@endfor
@foreach ($arr as $a)
    I like {{ $a }}
@endforeach
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> --}} 

@extends("master")
@section('title') About Test @endsection

@section("content")
    <form action="{{ route('exchange') }}" method="post" class="p-3 ">
        @csrf
        <div class="card col-md-6">
            <input type="file" name="photo" class="form-control">
           {{-- <div class="mb-3">
            
                <label for="form-label">Amount</label>
                <input type="text" name="amount" class="form-control" required>
           </div>
           <div class="mb-3">
            <label for="form-label">Currency</label>
            <input type="text" name="currency" class="form-control" required>
            </div> --}}
            <button class="btn btn-primary mb-3">Change</button>
        </div>
    </form>
    
     @endsection
