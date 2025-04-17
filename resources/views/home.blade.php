@extends('layouts.app')
@section('title', 'OA Tutors')
@include('components.head')

@include('partials.header')
@include('components.slider')
@include('components.backtoschool-slider')

@section('content')
<div class="main">
    <div class="container">
    @include('components.services')
</div>

</div>
@endsection
