@extends('layouts.app')

@section('content')

<div class="container">

   

<div class="container">

<button type="button" class="btn btn-info mb-3" onclick='window.location.href = "/allactivity/{{ $submitted->id }}/edit"'>Edit</button>


<div class="card" style="width: 20rem;">
    <img src="{{ asset('/images/example.png') }}" class="card-img-top" alt="An Image">
    <div class="card-body">
        <h3 class="card-title">{{ $submitted->id }}</h3>
        <h4 class="card-title">{{ $submitted->title }}</h4>
        <h2>{{ $submitted->students_name }}</h2>
        <p class="card-text">{{ $submitted->activity_text }}</p>
        <a href="/allactivity" class="btn btn-primary">Submit Output</a>
    </div>
</div>
</div>




</div>

@endsection