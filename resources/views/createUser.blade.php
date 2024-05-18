<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/register" method="POST">
@csrf
<label for="">user</label>
<input value="{{old('name')}}" type="text" name="name">
@error('name')
<p>{{$message}}</p>
@enderror
<br>
<label for="">email</label>
<input value="{{old('email')}}" type="text" name="email">
@error('email')
<p>{{$message}}</p>
@enderror
<br>
<label for="">Password</label>
<input value="{{old('password')}}" type="text" name="password">
@error('password')
<p>{{$message}}</p>
@enderror
<button type="submit">Submit</button>
</form>
</body>
</html>
