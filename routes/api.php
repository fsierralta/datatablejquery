<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get( 'users', function( ){

    return  datatables()
    ->eloquent(App\User::query())
    ->addColumn('btn','botones')
    ->rawColumns(["btn"])
    ->toJson();
    /*
    //return datatables()->of(App\User::query())->toJson();
    $users = DB::table('users')
                ->whereJsonLength('id', '=', 1)
                ->get();
    */
    //return $users ;
    //return view('vista01',$users); 

});