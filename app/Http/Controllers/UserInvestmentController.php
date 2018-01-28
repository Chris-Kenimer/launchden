<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UserInvestmentController extends Controller
{
    //

    public function index(){
      $active_icos = DB::table('ico_pages')->get();
      return view('ico-pages.user_pages.dashboard')->with('active_icos', $active_icos);
    }
}
