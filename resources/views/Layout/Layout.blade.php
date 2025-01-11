<!-- resources/views/Layout/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Document</title>
      @vite('resources/css/app.css')
    <style>
        * {
          box-sizing: border-box;
        }
        body {
          font-family: Arial, Helvetica, sans-serif;
        }
        header {
          background-color: #666;
          padding: 30px;
          text-align: center;
          font-size: 35px;
          color: white;
        }
        section {
          padding: 20px;
        }
        footer {
          background-color: #777;
          padding: 10px;
          text-align: center;
          color: white;
        }
    </style>
</head>
<body>

    @include('Test.Header') <!-- Placeholder for header content -->
    @include('components.Flashbag')

    <section>
        @yield('main') <!-- Placeholder for main content -->
    </section>

    @include('components.Footer') <!-- Placeholder for footer content -->

</body>
</html>
