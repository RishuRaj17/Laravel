
<html>
    <head>
        <title>View Student Records</title>
    </head>

    <body>
        <table border=1>
            <tr>
                <td>ID</td>
                <td>Name</td>
            </tr>

            @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>