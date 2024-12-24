@extends('Layout.layout') <!-- Ensure correct path to layout -->

@section('header')
<header>
    <h1>My Website Header</h1>
</header>
@endsection

@section('main')
<article>
    <x-alert type='bg-rose-600' >
        <strong>Le message Bien Evoiyer</strong>
    </x-alert>
    <h2>Main Content Area</h2>
    <p>This is where the main content goes.</p>
    <x-personnes-table :personnes="$personnes" />
</article>
@endsection

@section('footer')
<footer>
    <p>Footer</p>
</footer>
@endsection
