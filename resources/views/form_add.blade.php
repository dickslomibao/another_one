<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add Grade</h1>
    <form action="/home/addgrade" method="post">
        @csrf
        <label for="">Subject id</label><br>
        <input type="text" name="id" value="{{$id}}" readonly>
        <br>
        <label for="">Grade</label><br>
        <input type="number" name="grade">
        <br><br>
        <input type="submit" value="Add grade">
    </form>
</body>
</html>