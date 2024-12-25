@extends('Layout.layout') <!-- Ensure correct path to layout -->
@section('main')
<!-- Component -->
<form action="{{ route('profiles.store') }}" method="POST">
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                    <div class="text-gray-600">
                        <p class="font-medium text-lg">Add New Personnes</p>
                        <p>Please fill out all the fields.</p>
                    </div>
                    @csrf
                    <div class="lg:col-span-2">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                            <div class="md:col-span-5">
                                <label for="name" class="font-medium text-gray-700">Full Name</label>
                                <input type="text" name="name" id="name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter full name" required />
                            </div>
                            <div class="md:col-span-5">
                                <label for="email" class="font-medium text-gray-700">Email Address</label>
                                <input type="email" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="email@domain.com" required />
                            </div>
                            <div class="md:col-span-3">
                                <label for="password" class="font-medium text-gray-700">Password</label>
                                <input type="password" name="password" id="password" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter password" required />
                            </div>
                            <div class="md:col-span-5">
                                <label for="description" class="font-medium text-gray-700">Description</label>
                                <textarea name="description" id="description" class="h-24 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Add your description" required></textarea>
                            </div>
                            <div class="md:col-span-5 text-right">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


@endsection
