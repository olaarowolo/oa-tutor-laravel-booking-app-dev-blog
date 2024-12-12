@extends('layouts.app')

@include('components.head')

@section('title', 'Our Policies')

@section('content')
@include('docs.terms')
@include('docs.booking-policy')
@include('docs.tuition-delivery-policy')
@include('docs.dress-policy')
@include('docs.privacy-policy')
@endsection
