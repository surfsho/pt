<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Artesaos\SEOTools\Facades\SEOTools;
use App\Http\Controllers\BotmanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    SEOTools::setTitle('Hom');
    SEOTools::setDescription('This is my page description');
    return view('welcome');
});

Route::post('/sendemail', function (Request $request) {
    DB::table('subscriber')->insert([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'subject' => $request->input('subject'),
        'message' => $request->input('message')
    ]);

    Mail::to($request->input('email'))->send(new TestMail($request->input('message'),$request->input('subject')));
});

Route::match(['get','post'], '/botman',[BotmanController::class,'handle']);