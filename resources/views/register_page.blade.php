<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h2>Register page</h2>

    <form action="/register" method="post">
        @csrf
        <label for="">Student ID:</label><br>
        <input type="text" name="student_id" required><br>

        <label for="">Name:</label><br>
        <input type="text" name="name" required><br>

        <label for="">Address:</label><br>
        <input type="text" name="address" required><br>

        <label for="">Email:</label><br>
        <input type="text" name="email" required><br>

        <label for="">Course:</label><br>
        <input type="text" name="course" required><br>
        <br>

        <input type="submit" value="Create an acount">
    </form>
</body>
</html>