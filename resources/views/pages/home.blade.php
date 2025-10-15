@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('components.home.hero', ['stats' => $heroStats])
    @include('components.home.what-we-do', ['services' => $services])
    @include('components.home.updates', ['updates' => $updates])
    @include('components.home.member-marquee', ['members' => $members])
    @include('components.home.impact', ['metrics' => $metrics])
@endsection
