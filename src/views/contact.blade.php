<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<center>
<h1>Contact-Us Form </h1>


<form action="{{route('contact')}}" method="post">
    @csrf
    @method('post')
    <input type="text" name="name" placeholder="Enter Your Name"> <br>
    <input type="text" name="email" placeholder="Enter Your Email"> <br>
    <textarea name="text" name="text" cols="30" rows="10"></textarea><br>
    <button type="submit">Submit</button>
</form>
</center>
</html>
