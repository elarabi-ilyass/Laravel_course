@extends('Layout.layout') <!-- Ensure correct path to layout -->
@section('main')
<div class="container mx-auto px-4 py-8">
    <div class="overflow-x-auto">
      <table class="min-w-full bg-white border border-gray-200 rounded-lg">
        <thead>
          <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              ID
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Name
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Email
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Description
            </th>
            <th class="px-6 py-3  text-xs text-center font-medium text-gray-500 uppercase tracking-wider">
              Actions
            </th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">

          <tr>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $profile->id }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $profile->name }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $profile->email }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ Str::limit($profile->description, 20, '...') }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <div class="flex justify-around space-x-2">
                    <button
                        type="button"
                        class="text-white bg-green-500 hover:bg-green-600 font-medium py-2 px-4 rounded">
                        Edit
                    </button>
                    <button
                        type="button"
                        class="text-white bg-rose-700 hover:bg-rose-800 font-medium py-2 px-4 rounded">
                        Delete
                    </button>
                </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  @endsection
