<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\StudentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    public function rukaiya () {
        $stDatas = StudentModel::all(); 
        return view("home", compact('stDatas'));
    }
    public function destroy($id)
    {
        $sts = StudentModel::find($id);
        if ($sts) {
            $sts->delete();
        }
        return Redirect::to("/home");
    }
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
}
