<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class StaffController extends Controller
{   
    public function index(){

        // Lấy danh sách tất cả người dùng
        $users = User::select('id', 'name', 'email', 'role', 'created_at', 'status')->where('role', '!=', 'user')->paginate(perPage: 10);

        return view('admin.main.role.role-list', compact('users'));

    }

    public function addView(){
        return view('admin.main.role.role-add');
    }

    public function edit($id){
        $staff = User::find($id);
        return view('admin.main.role.role-edit', compact('staff'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required|in:staff,admin',
            'status' => 'required|in:active,inactive',
            'phone' => 'required|string|max:15',
            'cccd' => 'required|string|max:12',
        ]);

        $email_verified_at = Carbon::now()->format('dmyHi');

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'status' => $request->status,
            'phone' => $request->phone,
            'CCCD' => $request->cccd,
            'email_verified_at' => $email_verified_at,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'User created successfully!');
    }
}
