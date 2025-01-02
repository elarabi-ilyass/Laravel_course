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
                    <th class="px-6 py-3 text-xs text-center font-medium text-gray-500 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @if(isset($profiles) && $profiles->count())
                    @foreach ($profiles as $profile)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                {{ $profile->id }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                <a href="{{ route('Show.profile', $profile->id) }}" class="text-blue-500 hover:underline">
                                    {{ $profile->name }}
                                </a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                {{ $profile->email }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                {{ Str::limit($profile->description, 20, '...') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex justify-around space-x-2">
                                    <button
                                        type="button"
                                        class="text-white bg-green-500 hover:bg-green-600 font-medium py-2 px-4 rounded">
                                        Edit
                                    </button>
                                    <form action="{{ route('profiles.destroy', $profile->id) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button
                                            type="submit"
                                            class="text-white bg-rose-700 hover:bg-rose-800 font-medium py-2 px-4 rounded">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-center">
                            No profiles found
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

    <!-- Pagination Links -->
    <div class="mt-4">
        {{ $profiles->links('pagination::tailwind') }}
    </div>
</div>
@endsection
