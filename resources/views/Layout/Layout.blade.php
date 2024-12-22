<!-- resources/views/Layout/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    @yield('header') <!-- Placeholder for header content -->

    <section>
        @yield('main') <!-- Placeholder for main content -->
    </section>

    @yield('footer') <!-- Placeholder for footer content -->

</body>
</html>
