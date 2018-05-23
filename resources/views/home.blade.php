@extends('layout')

@section('nav')
@include('sections.nav')
@endsection


@section('header')
@include('sections.header')
@endsection


@section('content')
<div class="row flex-column justify-content-around align-items-center h-100 py-4 text-light">
    <h3 class="text-center">We do Mobile Development, Creative Design, Analytical Research, Web Products, Games, VR & AR Cases, High QA testing, Brand Strategy and more</h3>
    <!-- Video Button-->
    <a href="">
        <i class="fa fa-play-circle-o" aria-hidden="true" id="play-icon"></i>
    </a>
    <!-- Down Button-->
        <a href="" class="d-flex justify-content-center align-items-center text-light">
            <p class="mb-0 mr-2">Let me show you what I have worked on</p>
            <i class="fa fa-arrow-right" aria-hidden="true" id="arrow-icon"></i>
        </a>

</div>

@endsection
