<!-- filepath: resources/views/users/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>User Liste</title>
</head>
<body>
    <h1>User Liste</h1>
    <a href="{{ route('create') }}">add neu user</a>
    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if($user->photo)
                        <img src="{{ asset('storage/' . $user->photo) }}" width="60" alt="User Photo">
                    @else
                        Kein Foto
                    @endif
                </td>
                <td>
                    <a href="{{ route('show', $user->id) }}">show</a> |
                    <a href="{{ route('edit', $user->id) }}">edi</a> |
                    <form action="{{ route('destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('are you sur?')">delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>