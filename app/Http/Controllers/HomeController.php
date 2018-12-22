<?php

namespace App\Http\Controllers;

use App\Home;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {

        return view('home.home');
    }

    public function form(Request $request){
        $data = $request;

//        DB::table('homes')->insert(
//                ['firstname' => $request->firstname,
//                'lastname' => $request->lastname]
//        );
//        //return view('home.form')->with('data', $data);

        $homes = new Home();
        $homes -> firstname = $data -> firstname;
        $homes -> lastname = $data-> lastname;

        $homes -> save();

        return "data added successfully";
    }


}
