<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class AuthController extends Controller
{
    public function index(Request $request)
{
    if (auth()->user()->role == 'admin') {
        if ($request->ajax()) {

            $userData = User::select('*');
            return DataTables::of($userData)->make(true);
        } else {
            return view('dashboard.adminView');
        }
    } else {
        abort(403, 'Access denied.');
    }
}


    public function showLoginForm()
    {
        if (auth()->check()) {
            return redirect('/dashboard');
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->role == 'admin') {

                return redirect('/admin/dashboard');
            } else {

                Auth::logout();
                return back()->withErrors(['error' => 'Access denied for regular users.']);
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.editUser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('admin.index')->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['success' => 'User deleted successfully']);
    }
}
