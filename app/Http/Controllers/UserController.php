<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function forgotPassword()
    {


        return view('auth.forgot');
    }

    public function forgotSend(Request $request)
    {

        $credentials = $request->validate([
            'username' => ['required'],
            'pemulihan' => ['required'],

        ]);

        if (Auth::once($credentials)) {
            $request->session->regenerate();
            return view('auth.reset');
        }

        return redirect()->back()->with('error', 'Username dan Kode Pemulihan tidak sesuai');

    }

    public function registerStore(Request $request)
    {

        if($request->password != $request->repassword){

            return redirect()->back()->with('error','Password dan konfirmasi tidak sesuai!');
        }

        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->pemulihan = $request->pemulihan;
        $user->password = bcrypt($request->password);
        $user->role = 'user';
        $user->save();

        if($user) {return redirect()->route('login')->with('status','Registrasi Berhasil, Silahkan Login!');
        }
        return redirect()->back();

    }

    public function loginStore(Request $request)
    {

        $data = $request->only('email','password');

       if (Auth::attempt($data)) {
            $request->session()->regenerate();
            if(Auth::user()->role == 'admin'){
                return redirect()->route('dashboard');
            }else{
                return redirect()->route('store');
            }
        }
        return redirect()->back()->with('error','Email atau Password Salah!');

    }

    public function userDetail($id)
    {
        $user = User::find($id);
        return view('pages.user', compact('user'));
    }

    public function userEdit($id)
    {

        $user = User::where('id', $id)->first();
        return view('pages.edit-user', compact('user'));

    }

    public function updateUser(Request $request, $id)
    {
        $user = User::where('id',$id)->first();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->update();

        return redirect()->route('store');

    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('store');
    }

}
