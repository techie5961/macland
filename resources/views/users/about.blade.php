@extends('layout.users.app')
@section('css')
    <style class="css">
       main{
        padding:0;
       } 
       .cont{
        border:1px solid rgba(0,0,0,0.1) !important;
        background:transparent !important;
        border-radius:5px !important;
       }
    </style>
@endsection
@section('title')
    About Us
@endsection
@section('main')
    <section class="w-full column g-10">
        {{-- HEADER --}}
        <div class="w-full bg-primary primary-text no-select p-20 row align-center space-between g-10">
            <span onclick="spa(event,'{{ url('users/profile') }}')" class="pc-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M228,128a12,12,0,0,1-12,12H69l51.52,51.51a12,12,0,0,1-17,17l-72-72a12,12,0,0,1,0-17l72-72a12,12,0,0,1,17,17L69,116H216A12,12,0,0,1,228,128Z"></path></svg>

            </span>
            <strong class="desc">About Us</strong>
            <span></span>
        </div>
        {{-- BODY --}}
        <div class="body font-1 p-10 column g-10">
         <strong style="font-size:1.5rem;" class="c-primary">
               Who We Are
         </strong>

We are a structured investment platform designed to connect investors with real-sector opportunities inspired by the Kroger retail ecosystem. <br>Our focus is on grocery, seafood, farm produce, and store-based investment plans that allow individuals to grow their capital through transparent and time-based returns.
<br>
We believe investing should be simple, accessible, and rewarding, regardless of your financial background.


        </div>
    </section>
@endsection
