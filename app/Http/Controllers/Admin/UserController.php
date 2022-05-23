<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index() {
        $users = User::whereIn('role', ['CUSTOMER', 'ADMIN'])->get();
        return view('pages.user.user',[
            'users' => $users,
        ]);
    }

    public function activeStatus($id) {
        $users = User::findOrFail($id);
        $users->update(['status_user' => 'ACTIVE']);
        return redirect()->back()->with('status', 'Status user berhasil dirubah');
    }


    public function nonActiveStatus($id) {
        $users = User::findOrFail($id);
        $users->update(['status_user' => 'NON ACTIVE']);
        return Redirect::back()->with('status', 'Status user berhasil dirubah');
    }

    public function resetPassword($id) {
        
        $users = User::findOrFail($id);
        $users->update(['password' => Hash::make('bengkeleko') ]);
        return Redirect::back()->with('status', 'Password berhasil di reset menjadi bengkeleko');
    }


}
