<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD Application </title>
</head>
<style>
    .center
    {
       display: flex;
       justify-content: center;
       align-items: center;
    }
</style>
<body>
  
<div class="container">
    <div class="center">
        <h2>Add user</h2>
    </div>
    <div class="center">
        <form action="add" method="POST">
            @csrf
            <input type="text" name="name" placeholder="enter name"> <br> <br>
            <input type="text" name="lastName" placeholder="enter last name"> <br> <br>
            <input type="text" name="phone" placeholder="enter phone"> <br> <br>
            <input type="text" name="street" placeholder="enter street"> <br> <br>
            <input type="text" name="city/conutry" placeholder="enter city/conutry"> <br> <br>
            <button>Add user</button>
        </form>
    </div>
</div>
   
</body>
</html>