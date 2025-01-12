<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style >
        .Dropdown{
            margin-left:1030px;
        }
        .hidden{
            display: none;
        }
    </style>
    <title>Document</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        h1 {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>

    @include('Test.Header')

    <h1>Salut tout le monde</h1>
    {{-- Simple Example --}}
    {{ $nom }}

    {{-- ForEach example --}}


    <div>
        @foreach ($languages as $language )
            <p>{{ $language }}</p>
        @endforeach
    </div>

    {{-- IF EXAMPLE --}}
    @if (count($languages)===1)
            Ihave one record!
    @elseif (count($languages)>1)
            I have multiple records
    @else
            I don't have any records!
    @endif

    {{-- Unless Example --}}
    @unless (count($languages)>1)
        So you must push your data in that table
        @else
        Don't worry You have data in that table
    @endunless

    {{-- Switch Example --}}

    @switch($Jobs)
        @case('Professeur')
          <p>Welcom to my class </p>
        @break
        @case('editor')
        <p>Hello, Editor! You can edit and pubpsh articles.</p>
        @break
        @case('Developpeur Web Full stack')
        <p>Hi, I Developer Web Full stack</p>
        @break

        @default
        <p>Welcome, Guest! Please log in to access more features.</p>
    @endswitch

    {{-- isset Example --}}

     @isset($nom)
       <p>My name is {{ $nom === 'Ilyass' ? $nom : 'you don’t have any value' }}</p>
     @endisset





</body>
</html>
