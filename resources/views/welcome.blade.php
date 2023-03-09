@extends('layouts.app')

@section('page_title') Laravel Comics @endsection
    
@section('main_content')

    @foreach ($comics as $fumetto)
    <div class="card" style="">
        <img src="" class="card-img-top" alt="">
        <div class="card-body">
          <p class="card-text"><div>{{ $fumetto['title'] }}</div></p>
        </div>
    </div>
    
        {{-- <div>{{ $fumetto['title'] }}</div> --}}
        
    @endforeach

@endsection
   

   