<!-- resources/views/home.blade.php -->
@extends('Layout.layout') <!-- Ensure correct path to layout -->

@section('header')
<header>
    <h1>My Website Header</h1>
</header>
@endsection

@section('main')
<article>
    <h2>Main Content Area</h2>
    <p>This is where the main content goes.</p>
</article>
@endsection

@section('footer')
<footer>
    <p>Footer</p>
</footer>
@endsection
