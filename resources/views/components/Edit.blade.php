@extends('Layout.layout') <!-- Ensure correct path to layout -->

@section('main')
<!-- Display errors if any -->
@if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">Oops!</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li> <!-- Display each error -->
            @endforeach
        </ul>
    </div>
@endif

<!-- Component -->
<form action="{{ route('Update_Profile',$profile->id) }}" method="post">
    @csrf <!-- CSRF protection -->
    @method('PUT')
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                    <div class="text-gray-600">
                        <p class="font-medium text-lg">Modifiez Personnes</p>
                        <p>Please fill out all the fields.</p>
                    </div>
                    <div class="lg:col-span-2">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                            <div class="md:col-span-5">
                                <label for="name" class="font-medium text-gray-700">Full Name</label>
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    value="{{ $profile->name }}"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    placeholder="Enter full name">

                                @error('name')
                                    <div class="text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="md:col-span-5">
                                <label for="email" class="font-medium text-gray-700">Email Address</label>
                                <input type="email"
                                       name="email"
                                       id="email"
                                       value="{{ $profile->email }}"
                                       class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                       placeholder="email@domain.com"  />
                                @error('email')
                                    <div class="text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="md:col-span-3">
                                <label for="password" class="font-medium text-gray-700">Password</label>
                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    value="{{ $profile->password }}"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    placeholder="Enter password"  />
                                @error('password')
                                    <div class="text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="md:col-span-3">
                                <label for="password" class="font-medium text-gray-700">Password Confirmation</label>
                                <input type="password" name="password_confirmation" id="password" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter password"  />
                                @error('password')
                                    <div class="text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="md:col-span-5">
                                <label for="description" class="font-medium text-gray-700">Description</label>
                                <textarea
                                    name="description"
                                    id="description"
                                    class="h-24 border mt-1 rounded px-4 w-full bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    placeholder="Add your description" >
                                    {{ $profile->description }}
                                </textarea>
                                @error('description')
                                    <div class="text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="md:col-span-5 text-right">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Create Profile
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
