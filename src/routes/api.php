<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\LeadInformation;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("lead_information", function() {
    return LeadInformation::get();
});

Route::post("lead_information", function() {

    $abc = new LeadInformation();
    $abc->DL = request()->DL ?? "";
    $abc->save();

    return response()->json($abc);
});

// http://localhost/example-app/api/lead_information