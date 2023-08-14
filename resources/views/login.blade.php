<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>login page</h2>
    @if (session('message'))
        <h2>{{session('message')}}</h2>
    @endif
    <form action="/login" method="post">
        @csrf


        <label for="">Email:</label><br>
        <input type="text" name="email" required><br>

        <br>
        <input type="submit" value="Login">
    </form>
</body>

</html>
