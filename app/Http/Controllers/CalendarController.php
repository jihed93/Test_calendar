<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalendarController extends Controller
{
    public function getAdress()
    {
        $adress = DB::table('adress')
            ->select('adress')
            ->get();
        return view('welcome', ['adress' => $adress] );
    }
    public function getUserAdress($id)
    {
        $user_adress = DB::table('users')
            ->select('adress')
            ->where('id', $id)
            ->first();
        return view('welcome', ['user_adress' => $user_adress]);
    }
}
