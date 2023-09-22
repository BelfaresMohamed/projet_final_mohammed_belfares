<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleeController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $allusers = User::all();
        return view('backend.alluser', compact("allusers", "roles"));
    }

    public function destroyuser(User $user)
    {
        $user->delete();
        return redirect()->back();
    }

    public function updateuser(Request $request, User $user)
    {
        request()->validate([
            "name" => ["required"],
            "email" => ["required"],
        ]);

        // dd($request->old_role);

        $data = [
            "name" => $request->name,
            "email" => $request->email
        ];
        
        $user->update($data);
        $user->removeRole($request->old_role);
        $user->assignRole($request->role);
        return redirect()->back();
    }
}
