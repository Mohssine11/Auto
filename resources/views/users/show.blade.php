<!-- filepath: resources/views/users/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
</head>
<body>
    <h1>User Details</h1>
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Foto:</strong><br>
        @if($user->photo)
            <img src="{{ asset('storage/' . $user->photo) }}" width="120" alt="User Photo">
        @else
            Kein Foto
        @endif
    </p>
    <a href="{{ route('index') }}">Zurück zur User-Liste</a>
</body>
</html>