<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('username', 'password'); //Return key/value pair in the request

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->withSuccess('Signed in');
        }

        $validator['emailPassword'] = 'Email address or password is incorrect.';

        return redirect('/')->withErrors($validator);
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:6'
        ]);

        $data = $request->all();
        $check = $this->createUser($data);

        if ($check->id != null) {
            $credentials = $request->only('username', 'password');

            if (Auth::attempt($credentials)) {
                return redirect('dashboard')->withSuccess('Signed in');
            }
        }


    }

    public function createUser(array $data)
    {
        $dataCreate = [
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'email' => $data['username'] . "@bcm.com.co"
        ];
        return User::create($dataCreate);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("/")->withSuccess('You are not allowed to access');
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }

}