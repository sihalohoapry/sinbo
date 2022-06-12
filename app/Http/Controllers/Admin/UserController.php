<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index() {
        $users = User::where('role', 'CUSTOMER')->get();
        return view('pages.user.user',[
            'users' => $users,
        ]);
    }

    public function activeStatus($id) {
        $users = User::findOrFail($id);
        $users->update(['status_user' => 'ACTIVE']);
        return redirect()->back()->with('status', 'Status user berhasil diubah');
    }


    public function nonActiveStatus($id) {
        $users = User::findOrFail($id);
        $users->update(['status_user' => 'NON ACTIVE']);
        return Redirect::back()->with('status', 'Status user berhasil dirubah');
    }

    public function setAdmin($id) {
        
        $users = User::findOrFail($id);
        $users->update(['role' => 'ADMIN' ]);
        return Redirect::back()->with('status', 'Password membuat admin');
    }
    public function resetPassword($id) {
        
        $users = User::findOrFail($id);
        $users->update(['password' => Hash::make('bengkeleko') ]);
        return Redirect::back()->with('status', 'Password berhasil di reset menjadi bengkeleko');
    }

    public function profile() {
        $data = Auth::user();
        return view('pages.user.profile', ['user'=> $data]);
    }

    public function editProfile(Request $request, $id) {
        $data = User::findOrFail($id);

        $item = $request->all();
        if($request->password){
            $item['password'] = bcrypt($request->password);
        }else{
            unset($item['password']);
        }

        if($request->email){
            $item['email'] = $request->email ;
        }else{
            unset($item['email']);
        }

        $data->update($item);
        return redirect()->back()->with('status', 'Data diri berhasil di ubah');
    } 

}
