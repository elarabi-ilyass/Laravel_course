@extends('Layout.layout') <!-- Ensure correct path to layout -->

@section('main')
<div class="max-w-sm mx-auto p-5 border rounded-lg shadow-lg text-center bg-white">
    <!-- Profile Image -->
    <img
        class="w-32 h-32 rounded-full mx-auto"
        src="{{ asset('storage/images/' . auth()->user()->image) }}"

        alt="Profile Image"
    >

    <!-- Profile Details -->
    <div class="text-sm mt-5">
        <a href="#"
            class="font-medium text-lg text-gray-900 hover:text-indigo-600 transition duration-500">
            {{ auth()->user()->name }}
        </a>
        <p class="text-gray-500">Blogger &amp; Youtuber</p>
        <p class="text-gray-500">
            <a href="mailto:{{ auth()->user()->email }}"
            class="font-medium text-lg text-gray-900 hover:text-indigo-600 transition duration-500">
            {{ auth()->user()->email }}
        </a>
        </p>
    </div>

    <!-- Description -->
    <p class="mt-2 text-sm text-gray-700">
        {{ auth()->user()->description }}
    </p>

    <!-- Social Media Links -->
    <div class="flex justify-center gap-3 mt-4">
        {{ \Carbon\Carbon::parse(auth()->user()->created_at)->format('d-m-y') }}

    </div>
</div>
@endsection
