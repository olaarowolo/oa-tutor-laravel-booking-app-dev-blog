@extends('layouts.app')
@include('components.head')
@include('partials.header')
@section('title', 'Back to School Registration (Summer Term 2025)')
{{-- @include('components.slider') --}}
@section('content')
@include('components.backtoschool')
    @include('components.backtoschool-form')

@endsection
