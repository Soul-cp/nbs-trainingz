<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    
    <h1>Edit</h1>
    <form action="{{ route('students.update', $student->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $student->name }}">
        <br>
        <label for="age">Age</label>
        <input type="text" name="age" id="age" value="{{ $student->age }}">
        <br>
        <label for="dob">dob</label>
        <input type="date" name="dob" id="dob" value="{{ $student->dob }}">
        <br>
        <label for="address">address</label>
        <input type="text" name="address" id="address" value="{{ $student->address }}">
        <br>
        <input type="hidden" name="is_final_year" value="0">
        <label for="is_final_year">is_final_year</label>
        <input type="checkbox" name="is_final_year" id="is_final_year" value="1" {{ $student->is_final_year ? 'checked' : '' }}> 
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('students.index') }}">Back to student list</a>
    
</body>
</html>