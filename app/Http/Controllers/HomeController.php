<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $date = Carbon::now();
       $month = $date->month;

      //  return Carbon::createFromFormat('m/d/Y h:i:s', '17/11/2021 15:21:8')->format('Y-m-d h:i:s');


        $students =   DB::table('students')->get()->count();
        $months = DB::table('students')->whereMonth('created_at','=',$month) ->get()->count();

        //$weekly =  DB::table('students')->whereweek('created_at','=',$month) ->get()->count();
        return view('index',compact('students','months'));
    }
}
