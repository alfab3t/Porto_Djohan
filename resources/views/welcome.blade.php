@extends('layouts.app')

@section('content')
    <!-- Navbar Navigation Header -->
    @include('partials.navbar')

    <!-- Hero Showcase Column Grid Section -->
    @include('partials.hero')

    <!-- Skills, Categories, and Pagination Dashboard -->
    @include('partials.features')

    <!-- Projects Portfolio Cards -->
    @include('partials.portfolio')

    <!-- Timeline Milestones Resume -->
    @include('partials.resume')

    <!-- Client Logo Grids -->
    @include('partials.clients')

    <!-- Service Rates Pricing Tables -->
    @include('partials.pricing')

    <!-- Articles blog list -->
    @include('partials.blog')

    <!-- Contact Form card and credentials footer -->
    @include('partials.contact')
@endsection
