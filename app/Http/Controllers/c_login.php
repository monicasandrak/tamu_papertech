<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c_login extends Controller
{
    // public function login()
    // {
    //     $data['title'] = 'Login';
    //     return view('login', $data); //mengarahkan ke view form login
    // }

    // public function login_action(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required',
    //         'password' => 'required',
    //     ],[
    //         'username.required' => 'Username tidak boleh kosong',
    //         'password.required' => 'Password tidak boleh kosong',
    //     ]);
    //     if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
    //         $request->session()->regenerate();
    //         return redirect()->intended('/')->with('success','You are now logged in');
    //     }
    //     return back()->withErrors([
    //         'password' => 'Username atau Password salah',
    //     ]);
    // }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'string', 'username'],
            'password' => ['required', 'string']
        ]);

        if($validator->fails()){
            return $this->responseError('Login Failed !', 422, $validator->errors());
        }

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            $user = auth()->user();

            $response = [
                'token' => $user->createToken('MyToken')->accessToken,
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
            ];

            return $this->responseOk($response);

        }else {
            return $this->responseError('wrong username or password !', 401);
        }
    }
    
}
