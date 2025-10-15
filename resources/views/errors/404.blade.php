@extends('layouts.app')

@section('title', 'Page Not Found')

@section('content')
    <section class="flex min-h-[60vh] items-center justify-center bg-muted/30">
        <div class="text-center space-y-4 p-8">
            <h1 class="text-5xl font-bold text-primary">404</h1>
            <p class="text-xl text-muted-foreground">Oops! Page not found</p>
            <a href="{{ route('home') }}" class="btn btn-cta btn-size-default inline-flex items-center justify-center">
                Return to Home
            </a>
        </div>
    </section>
@endsection
