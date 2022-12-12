<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD Application </title>
</head>
<body>
    <style>
        .center
    {
       display: flex;
       justify-content: center;
       align-items: center;
    }
    </style>
<div class="center">
    <table border="1">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>last name</td>
            <td>phone</td>
            <td>street</td>
            <td>city/country</td>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['lastName']}}</td>
            <td>{{$user['phone']}}</td>
            <td>{{$user['street']}}</td>
            <td>{{$user['city/conutry']}}</td>
        </tr>
        @endforeach
    </table>
</div>
   
</body>
</html>