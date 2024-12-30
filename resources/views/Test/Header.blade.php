<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>

    <nav class=" p-4">
        <ul class="flex space-x-4 text-white">
            <li>
                <a href="{{ url('/') }}"
                   class="{{ Request::is('/') ? 'active font-bold underline' : '' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('Create-Form') }}"
                    class="{{ Request::is('/create') ? 'active font-bold underline' : '' }}">
                        News
                </a>

            </li>
            <li>
                <a href="{{ url('/About') }}"
                   class="{{ Request::is('About') ? 'active font-bold underline' : '' }}">
                    Contact
                </a>
            </li>
        </ul>
    </nav>


</body>
</html>
