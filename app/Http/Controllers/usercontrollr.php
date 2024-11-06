<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    // Show registration form
    public function profile()
    {
        $profileUrl = route('profile');
        return view('user.profile', ['profileUrl'=>$profileUrl]);
    }

    public function show($id){
        return view('user.show', ['userId' => $id]);
    }

    // Handle registration form submission
    public function register(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        // Create a new user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect or send a success message
        return redirect()->route('register')->with('success', 'User registered successfully.');
    }
}
?>