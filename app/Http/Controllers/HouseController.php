<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\House;
use Carbon\Carbon;

class HouseController extends Controller
{
    //

    public function index(){
        $houses= House::where('data_di_costruzione','>=',Carbon::now()->subYear(10))->get();
        return view('welcome',compact('houses'));
    }
}
