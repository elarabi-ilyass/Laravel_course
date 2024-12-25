@extends('Layout.layout') <!-- Ensure correct path to layout -->
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

