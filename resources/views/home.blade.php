<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .w-5{
            display: none;
        }
    </style>
</head>
<body>
    
    <h1>Home page</h1>
    <h2>HEllo, {{session('user')->name}}</h2>
    <a href="/home/update_profile">Edit Profile</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>GRADE</th>
            <th>DATE ADDED</th>
            <th>Action</th>
        </tr>

        @foreach ($subjects as $subject)
            <tr>
                <td>{{$subject->id}}</td>
                <td>{{$subject->name}}</td>
                <td>{{$subject->grade}}</td>
                <td>{{$subject->date_created}}</td>
                <td><a href="/home/delete/{{$subject->id}}">Remove subject</a>
                    
                    <a href="/home/addgrade/{{$subject->id}}">{{ $subject->grade == null ? "Add grade" : "Update grade" }}</a><td>
            </tr>
        @endforeach
    </table>
  
    {{$subjects->links()}}
    {{-- <script>
        function addGrade(){
            let grade = prompt("Please enter Grade", "");
            alert(grade);
            window.location.href('/home');
        }
    </script> --}}
</body>
</html>