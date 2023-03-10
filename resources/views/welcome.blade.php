@extends('layouts.app')

@section('page_title') Laravel Comics @endsection
    
@section('jumbotron')
<div class="jumbotron">
    <div class="container">

        <button class="big button">CURRENT SERIES</button>
    </div>
</div>
@endsection

@section('main_content')

    @foreach ($comics as $fumetto)
    <div class="card">
        <div class="card-cover"><img src="{{ asset('img/adv.jpg') }}" alt="comic"></div>
        <div class="card-title">{{ strtoupper($fumetto['title']) }}</div>
    </div>
        {{-- <img src="" class="card-img-top" alt="">
        <div class="card-body">
          <p class="card-text"><div>{{ $fumetto['title'] }}</div></p>
        </div> --}}
    
        {{-- <div>{{ $fumetto['title'] }}</div> --}}
        
    @endforeach

@endsection
   

   