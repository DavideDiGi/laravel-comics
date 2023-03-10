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
        
    @endforeach

@endsection

@section('merchandising')
<div class="container">
    <ul>
        <li>
            <a href="#">
                <img src="{{ asset('img/adv.jpg') }}" alt="">
                <span>
                    DIGITAL COMICS
                </span>
            </a>
        </li>

        <li>
            <a href="#">
                <img src="{{ asset('img/adv.jpg') }}" alt="">
                <span>
                    DC MERCHANDISE
                </span>
            </a>
        </li>

        <li>
            <a href="#">
                <img src="{{ asset('img/adv.jpg') }}" alt="">
                <span>
                    SUBSCRIPTION
                </span>
            </a>
        </li>

        <li>
            <a href="#">
                <img src="{{ asset('img/adv.jpg') }}" alt="">
                <span>
                    COMIC SHOP LOCATOR
                </span>
            </a>
        </li>

        <li>
            <a href="#">
                <img src="{{ asset('img/adv.jpg') }}" alt="">
                <span>
                    DC POWER VISA
                </span>
            </a>
        </li>


    </ul>
</div>
@endsection
   

   