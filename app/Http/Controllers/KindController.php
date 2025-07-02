<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Ensure you have the User model imported
class KindController extends Controller{
    public function index(){
        $users=User::all(); // Fetch all users
        return view('users.index',compact('users'));
    }
    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // <--- hinzufügen
    ]);

    $data['password'] = Hash::make($data['password']);

    if ($request->hasFile('photo')) {
        $data['photo'] = $request->file('photo')->store('photos', 'public');
    }

    User::create($data);

    return redirect()->route('index')->with('success', 'User created successfully.');
}

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function edit( $id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, $id){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email',
        ]);

        $user = User::findOrFail($id);
        $user->update($data);
        return redirect()->route('index');
    }
    public function destroy( $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('index')->with('success', 'User deleted successfully.');
    }
}
