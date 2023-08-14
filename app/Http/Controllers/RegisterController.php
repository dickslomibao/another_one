<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register_page');
    }

    public function create(Request $request)
    {

        // DB::insert("INSERT INTO `students`(`student_id`, `name`, `address`, `email`, `course`) VALUES (?,?,?,?,?)", [
        //     $request->input('id'),
        //     $request->input('name'),
        //     $request->input('address'),
        //     $request->input('email'),
        //     $request->input('course'),
        // ]);
        //
        // make sure the name of input is same with the attributes name of table.
        //
        // DB::table('students')->insert($request->except('_token'));

        DB::table('students')->insert([
            'student_id' => $request->input('student_id'),
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'course' => $request->input('course'),
        ]);
        return "added success";
    }
}