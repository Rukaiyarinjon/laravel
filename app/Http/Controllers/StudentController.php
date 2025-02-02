<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\StudentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{

    // view
    public function rukaiya () {
        $stDatas = StudentModel::all(); 
        return view("home", compact('stDatas'));
    }

    // delete
    public function destroy($id)
    {
        $sts = StudentModel::find($id);
        if ($sts) {
            $sts->delete();
        }
        return Redirect::to("/home");
    }

    // insert into another page gone
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $student = new StudentModel;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->contact = $request->contact;
        $student->save();
        return Redirect::to('/home');
    }

    // edit

    public function update($student_id)
    {
        $student = StudentModel::find($student_id);
        return view('edit',compact('student'));
    }

    public function editStore(Request $request)
    {
       $student = StudentModel::find($request->student_id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->contact = $request->contact;
        $student->save();
        return Redirect::to('/home');
    }
}
