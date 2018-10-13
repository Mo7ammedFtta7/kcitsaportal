<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models as db;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $clients= db\clients::all()->count();
      $customers= db\customers::all()->count();
      $jobs= db\jobs::all()->count();
      $jobstb= db\jobs::all()->take(10);
      $quotes= db\quotes::all()->count();
      $quotestb= db\quotes::all()->take(10);

      $cjobs= db\cjobs::all()->take(10);



        return view('home')->with('clients',$clients)->with('customers',$customers)->with('jobs',$jobs)->with('quotes',$quotes)->with('cjobs',$cjobs)->with('quotestb',$quotestb);
    }
}
