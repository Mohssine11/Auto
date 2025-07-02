<!-- filepath: resources/views/users/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>User bearbeiten</title>
</head>
<body>
    <h1>User bearbeiten</h1>
    <form action="{{ route('update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $user->name }}" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $user->email }}" required><br>
        <label>Aktuelles Foto:</label>
        @if($user->photo)
            <img src="{{ asset('storage/' . $user->photo) }}" width="60" alt="User Photo"><br>
        @else
            Kein Foto<br>
        @endif
        <label>Neues Foto (optional):</label>
        <input type="file" name="photo" accept="image/*"><br>
        <button type="submit">Speichern</button>
    </form>
    <a href="{{ route('index') }}">Zurück zur User-Liste</a>
</body>
</html>