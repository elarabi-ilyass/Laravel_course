@extends('Layout.layout') <!-- Ensure correct path to layout -->

@section('main')

<div class="p-6 bg-white rounded-lg shadow-md" role="tabpanel" tabindex="0">
    <div class="flex flex-col md:flex-row items-center gap-6">
      <div class="max-w-lg">
        <h3 class="text-2xl font-bold text-gray-900">Adaptive and modular</h3>
        <p class="mt-2 text-gray-600">
          The Organize base set allows you to configure and evolve your setup as your items and habits change.
          The included trays and optional add-ons are easily rearranged to achieve that perfect setup.
        </p>
      </div>
      <div>
        <img
          alt="Maple organizer base with slots, supporting white polycarbonate trays of various sizes."
          src="https://tailwindui.com/plus/img/ecommerce-images/product-feature-06-detail-01.jpg"
          class="w-full max-w-sm rounded-lg shadow"
        >
      </div>
    </div>
  </div>

@endsection
