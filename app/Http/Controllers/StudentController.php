<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Exception;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $students = Student::all();

        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('student.add');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        try {

            $student = new Student();

            $student->role_id = $request->role_number;
            $student->name = $request->studentName;
            $student->class = $request->class;
            $student->school = $request->school;
            $student->district = $request->district;

          //  return $student;

            if($student->save()) {
                return  back()->with('success', 'SucceessFully Added...');
            } else {
                   return back()->with('failed', 'Some error Occured');

            }


        } catch (Exception $e) {
            return back()->with('failed', 'Some error Occured'.$e->getMessage());

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $student = Student::find($id);

        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

      //

      try {

      // $student = new Student();
      $student = Student::find($id);
        $student->role_id = $request->role_number;
        $student->name = $request->studentName;
        $student->class = $request->class;
        $student->school = $request->school;
        $student->district = $request->district;

      //  return $student;

        if($student->save()) {
            return  back()->with('success', 'SucceessFully Updated...');
        } else {
               return back()->with('failed', 'Some error Occured');

        }


    } catch (Exception $e) {
        return back()->with('failed', 'Some error Occured'.$e->getMessage());

    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
try  {
        $student = Student::find($id);
        $student->delete();
        return  back()->with('success', 'SucceessFully Deleted...');
    } catch(\Exception $e) {
        return back()->with('failed', 'Some error Occured');
    }
    }
}
