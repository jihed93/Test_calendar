<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    $adress = DB::table('adress')
            ->select('*')
            ->get();
            //$id = auth()->id();
            $user = DB::table('users')
            ->select('adress')
            ->first();
            $user_adress = $user->adress;
        return view('welcome', ['adress' => $adress , 'user_adress' => $user_adress] );
});
