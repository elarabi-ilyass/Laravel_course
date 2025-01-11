<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Menu</title>
    <style >
        .Dropdown{
            margin-left:1030px;
        }
        .hidden{
            display: none;
        }
    </style>
</head>
<body>
    <nav class="bg-gray-800 p-4">
        <ul class="flex items-center space-x-4 text-white">
            <!-- Navigation links -->
            <li>
                <a href="{{ route('profiles.home_list') }}" class="{{ Request::is('/') ? 'font-bold underline' : '' }} hover:text-gray-300">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('profiles.CreateForm') }}" class="{{ Request::is('create') ? 'font-bold underline' : '' }} hover:text-gray-300">
                    Stores
                </a>
            </li>
            <li>
                <a href="{{ url('/About') }}" class="{{ Request::is('About') ? 'font-bold underline' : '' }} hover:text-gray-300">
                    Contact
                </a>
            </li>

            <!-- Login/Logout links -->
            <div class="ml-auto flex items-center space-x-4">
                @guest
                    <li class="relative Dropdown">
                        <a href="{{ route('Login') }}" class="{{ Request::is('LoginForm') ? 'font-bold underline' : '' }} hover:text-gray-300">
                            Login
                        </a>
                    </li>
                @endguest
                @auth
                    <li class="relative Dropdown">
                        <!-- Dropdown Trigger -->
                        <button
                            id="ButtonClick"
                            class="flex w-auto items-center space-x-2 px-4 py-2 text-sm font-medium text-gray-200 bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none">
                                {{ auth()->user()->name }}
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <ul
                        class="absolute right-0 mt-2 w-48 bg-white text-gray-800 border border-gray-300 rounded-md shadow-lg hidden"
                        id="DropdownMenu">
                        <li>
                            <a href="{{ url('/PersonnesDetails') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">
                                Settings
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('Login.Logout') }}"
                               class="block px-4 py-2 text-sm hover:bg-gray-100">
                                Logout
                            </a>
                        </li>
                    </ul>
                    </li>
                @endauth
            </div>
        </ul>
    </nav>
    <script>
        const ButtonClick=document.getElementById('ButtonClick');
        const Dropdown=document.getElementById('DropdownMenu');
        ButtonClick.addEventListener('click',()=>{
            Dropdown.classList.toggle('hidden');
        })
    </script>
</body>
</html>
