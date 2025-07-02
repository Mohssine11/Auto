<!DOCTYPE html>
<html>
<head>
    <title>Neuen User anlegen</title>
</head>
<body>
    <h1>Neuen User anlegen</h1>
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Photo:</label>
        <input type="file" name="photo" accept="image/*"><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Add</button>
    </form>
    <a href="{{ route('index') }}">Back to User List</a>
</body>
</html>