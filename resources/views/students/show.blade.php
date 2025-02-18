<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student detail</title>
</head>
<body>
    
    <h1>student detail</h1>
    <p><strong>Id:</strong> {{ $student->id }}</p>
    <p><strong>Name:</strong> {{ $student->name }}</p>
    <p><strong>Age:</strong> {{ $student->age }}</p>
    <p><strong>Date of Birth:</strong> {{ $student->dob }}</p>
    <p><strong>Address:</strong> {{ $student->address }}</p>
    <p><strong>Final Year:</strong> {{ $student->is_final_year ? 'yes' : 'no' }}</p>
    <br>
    <a href="{{ route('students.index') }}">Back to student list</a>
</body>
</html>