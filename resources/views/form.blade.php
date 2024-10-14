<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
    <title>Form Validation</title>
</head>
<body>
<h1>Form Validation</h1>
<form method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{old('name')}}">
    @error('name')
    <p>{{$message}}</p>
    @enderror
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{old('email')}}">
    @error('email')
    <p>{{$message}}</p>
    @enderror
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    @error('password')
    <p>{{$message}}</p>
    @enderror
    <label for="password_conformation">Password Conformation:</label>
    <input type="password" name="password_conformation" id="password_conformation">
    @error('password_conformation')
    <p>{{$message}}</p>
    @enderror
    <button type="submit">Submit</button>
</form>
</body>
</html>
