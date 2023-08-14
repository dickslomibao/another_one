<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function index()
    {
        $user_subjects = DB::table('subject_list')->where('user_id', session('user')->id)->paginate(2);
        return view('home', [
            'subjects' => $user_subjects,
        ]);
    }

    public function viewProfile()
    {
        $user = DB::table('students')->where('id', session('user')->id)->first();
        return view('update_profile', [
            'user' => $user,
        ]);
    }


    public function viewAddgrade($id)
    {
        return view('form_add',[
            'id'=>$id,
        ]);
    }
    
    public function addGradeAction(Request $request)
    {
        DB::table('subject_list')->where('id',$request->input('id'))->update([
            'grade'=>$request->input('grade'),
        ]);
        return redirect('/home');
    }
    public function removeSubject($id)
    {
        DB::table('subject_list')->where('id', $id)->where('user_id', session('user')->id)->delete();
        return redirect('/home');

    }
    public function updateProfile(Request $request)
    {


        DB::table('students')->where('id', session('user')->id)->update(
            [
                'student_id' => $request->input('student_id'),
                'name' => $request->input('name'),
                'address' => $request->input('address'),
                'email' => $request->input('email'),
                'course' => $request->input('course'),
            ]
        );
        session(['user' => DB::table('students')->where('id', session('user')->id)->first()]);
        return redirect('/home');

    }
}