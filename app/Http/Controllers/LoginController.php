<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        //    $data = DB::select('select * from students where email = ?',[$request->email]);

        $user = DB::table('students')->where('email', "=", $request->input('email'))->first();
        if ($user == null) {
            return redirect('/login')->with('message', 'Invalid emaild');
        } else {


            session(['user' => $user]);
            return redirect('/home');
        }

    }
}