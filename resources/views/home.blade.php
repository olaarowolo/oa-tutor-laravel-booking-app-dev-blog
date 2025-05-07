@extends('layouts.app')
@include('components.head')
@include('partials.navbar')
@include('components.slider')
@include('components.backtoschool-slider')
@section('content')
    <div class="main">
        <div class="container">
            @include('components.services')
        </div>
    </div>
@endsection
