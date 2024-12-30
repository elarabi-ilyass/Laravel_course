@props(['personnes'])
<div>
    <table class="relative group bg-gray-200 rounded-lg shadow-md p-4" border="2" style="width: 100%; border-collapse: collapse;">
        <caption>List of Persons</caption>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Job</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personnes as $personne)
            <tr>
                <td>{{ $personne['id'] }}</td> <!-- Use array syntax for accessing data -->
                <td>{{ $personne['name'] }}</td>
                <td>{{ $personne['job'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

