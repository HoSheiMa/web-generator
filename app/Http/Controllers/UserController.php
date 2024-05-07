<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index')->with('users', $users);
    }

    public function create()
    {
        return view('users.createUserView');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string'],
        ]);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        Role::create([
            "user_id" => $user->id,
            "role_code" => $data['role'] == "ADMIN" ? Role::ADMIN_CODE : Role::CUSTOMER_CODE,
            "role_name" => $data['role'] == "ADMIN" ? Role::ADMIN : Role::CUSTOMER,
        ]);
        session()->flash('success', true);
        return back();
    }
    public function edit(Request $request, User $user)
    {
        return view('users.editUserView')->with('user', $user);
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string'],
        ]);
        $user->update([
            'name' => $data['name'],
            'password' => $data['password'] ?  Hash::make($data['password']) : $user->password,
        ]);
        $user->role->update([
            "role_code" => $data['role'] == "ADMIN" ? Role::ADMIN_CODE : Role::CUSTOMER_CODE,
            "role_name" => $data['role'] == "ADMIN" ? Role::ADMIN : Role::CUSTOMER,
        ]);
        session()->flash('success', true);
        return back();
    }

    public function destroy(Request $request, User $user)
    {
        $user->delete();
        session()->flash('success', true);
        return back();
    }
}
