<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
    /**
     * 
     * Create a new controller instance
     * 
     * @return void
     */
     public function __construct()
     {
         $this->middleware('auth');
     }
     
     /**
      * Display the dashboard and its data for the user
      * 
      * @param Request $request
      * @return Response
      */
     public function index(Request $request)
     {
         return view('dashboards.dashboard');
     }
      
     public function show(Request $request)
     {
         return view('accounts.account');
     }
       
}
