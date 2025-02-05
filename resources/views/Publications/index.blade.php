@extends('Layout.layout') <!-- Ensure correct path to layout -->
@section('main')
<section class="w-full  ">
    <div class="flex  items-center justify-between">
      <div class="flex  items-center">
        <h2 class="truncate text-base font-medium text-slate-900">
          <a href="#component-822ab4bf111e9a34063e651275b381e6">With avatars and multi-line content</a>
        </h2>
        <p class="ml-3 hidden rounded-lg bg-slate-100 px-2 py-0.5 text-xs font-semibold whitespace-nowrap text-slate-700 lg:block">
          Preview
        </p>
      </div>
      <a class="ml-6 text-sm font-semibold whitespace-nowrap text-sky-500 hover:text-sky-600" href="/components#pricing">
        Get the code <span aria-hidden="true">→</span>
      </a>
    </div>

    <div class="mt-4 overflow-hidden rounded-lg border border-gray-200 shadow-sm">
      <table class="min-w-full divide-y divide-gray-200 bg-white">
        <thead class="bg-gray-50">
          <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Name
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Title
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Status
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Role
            </th>
            <th scope="col" class="px-6 py-3 relative">
                 Actions
            </th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <div class="h-10 w-10 flex-shrink-0">
                  <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40" alt="">
                </div>
                <div class="ml-4">
                  <div class="text-sm font-medium text-gray-900">Lindsay Walton</div>
                  <div class="text-sm text-gray-500">lindsay.walton@example.com</div>
                </div>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">Front-end Developer</div>
              <div class="text-sm text-gray-500">Optimization</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">
                Active
              </span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Member</td>
            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <div class='flex items-center justify-around'>
                    <a href="#" class="text-white bg-green-500 hover:bg-green-600 font-medium py-2 px-4 rounded">Edit</a>
                    <a href="#" class="text-white bg-rose-700 hover:bg-rose-800 font-medium py-2 px-4 rounded">Delete</a>
                </div>
            </td>
          </tr>
          <!-- Additional Rows -->
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <div class="h-10 w-10 flex-shrink-0">
                  <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40" alt="">
                </div>
                <div class="ml-4">
                  <div class="text-sm font-medium text-gray-900">Courtney Henry</div>
                  <div class="text-sm text-gray-500">courtney.henry@example.com</div>
                </div>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">Designer</div>
              <div class="text-sm text-gray-500">Intranet</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">
                Active
              </span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Admin</td>
            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
              <div class='flex items-center justify-around'>
                <a href="#" class="text-white bg-green-500 hover:bg-green-600 font-medium py-2 px-4 rounded">Edit</a>
                <a href="#" class="text-white bg-rose-700 hover:bg-rose-800 font-medium py-2 px-4 rounded">Delete</a>
              </div>
            </td>
          </tr>
          <!-- Add more rows as necessary -->
        </tbody>
      </table>
    </div>
  </section>



@endsection
