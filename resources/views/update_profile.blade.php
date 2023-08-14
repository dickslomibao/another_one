<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h2>Update profile page</h2>

    <form action="" method="post">
        @csrf
        <label for="">Student ID:</label><br>
        <input type="text" name="student_id" value="{{$user->student_id}}" required><br>

        <label for="">Name:</label><br>
        <input type="text" name="name" value="{{$user->name}}" required><br>

        <label for="">Address:</label><br>
        <input type="text" name="address" value="{{$user->address}}" required><br>

        <label for="">Email:</label><br>
        <input type="text" name="email" value="{{$user->email}}" required><br>

        <label for="">Course:</label><br>
        <input type="text" name="course" value="{{$user->course}}" required><br>
        <br>

        <input type="submit" value="Save acount">
    </form>
</body>
</html>