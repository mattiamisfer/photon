<?php

namespace App\Http\Controllers;

use App\Imports\StudentsImport;
use App\Imports\UsersImport;
use Exception;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    //

    public function import(Request $request) {

        try {

            $excel =   Excel::import(new StudentsImport, $request->file('select_file')->store('files'));
            return  back()->with('success', 'SucceessFully Imported...');
        } catch(Exception $e) {
            return back()->with('failed', 'Some error Occured');
        }

    }

}
