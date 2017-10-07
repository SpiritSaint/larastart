<?php

use Illuminate\Http\Request;
use App\User;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('signup', function (Request $request) {
    $user = User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')),
        'is_admin' => false,
    ]);
    return response()->json([
        'status' => 'success',
        'user' => $user,
    ]);
});

Route::post('login', function (Request $request) {
    if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
        $user = User::where('email','=',$request->input('email'))->get();
        return response()->json([
            'status' => 'success',
            'user' => $user,
        ]);
    } else {
        return response()->json([
           'status' => 'error',
        ]);
    }
});
