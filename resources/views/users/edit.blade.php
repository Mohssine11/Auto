<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" value="{{$user->name}}" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" value="{{$user->email}}" name="email" required><br><br>
        
        <button type="submit">update</button><br><br>
    </form>
    <a href="{{ route('index') }}">Back to User List</a>
</body>
</html>