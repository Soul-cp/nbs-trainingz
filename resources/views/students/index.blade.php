<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student list</title>
</head>
<body>
    
    <h1>Student list</h1>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>dob</th>
            <th>address</th>
            <th>is_final_year</th>
            <th>Action</th>

        </tr>
        @foreach($students as $student)

        <tr>
            <td>{{ $student->id }}</td>
            <td><a href="{{ route('students.show', $student->id) }}">{{ $student->name }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->dob }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->is_final_year ? 'yes' : 'no' }}</td>
            <td>
                <a href="{{ route('students.edit', $student->id) }}">
                    <button>Edit</button>
                </a>
                <form action="{{ route('students.destroy', $student->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="{{ route('students.create') }}">
        <button>create</button>
    </a>
    <td>
        
      
    </td>

</body>
</html>