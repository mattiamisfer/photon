<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Barryvdh\DomPDF\Facade as PDF;


use Illuminate\Http\Request;

class FilterController extends Controller
{
    //


    public function index() {

        return view('main_index');

    }

    public function search(Request $request) {

    $students =   Student::where('role_id','=',$request->search)->get();

//  if(empty($student)) {

//     return  back()->with('success', 'Sorry No Data Found...');
//  } else {
//     $pdf = PDF::loadView('students',compact('student'));
//     return $pdf->download('download.pdf');
//  }





   return view('main_index',compact('students'));

    }

 public function download ($id) {
    $student = Student::find($id);
    //  return view('students',compact('student'));

     $pdf = PDF::loadView('students',compact('student'));
      return $pdf->download($id.'.pdf');
 }
}
