@extends('layouts.app')

@section('title', $pageTitle)

@section('content')
    @foreach ($blocks as $block)
        <x-page-block :block="$block" />
    @endforeach
@endsection
