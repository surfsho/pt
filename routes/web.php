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

Route::get('/appointment', function () {
    SEOTools::setTitle('appointment');
    SEOTools::setDescription('This is my page description');
    return view('appointment');
});

Route::get('/whatsapp', function () {
    SEOTools::setTitle('appointment');
    SEOTools::setDescription('This is my page description');
    return view('whatsapp');
});

Route::get('/twowaytexting', function () {
    SEOTools::setTitle('appointment');
    SEOTools::setDescription('This is my page description');
    return view('twowaytexting');
});


Route::get('/callerid', function () {
    SEOTools::setTitle('appointment');
    SEOTools::setDescription('This is my page description');
    return view('callerid');
});


Route::get('/broadcast', function () {
    SEOTools::setTitle('appointment');
    SEOTools::setDescription('This is my page description');
    return view('broadcast');
});


Route::get('/digitalform', function () {
    SEOTools::setTitle('appointment');
    SEOTools::setDescription('This is my page description');
    return view('digitalform');
});


Route::get('/insuranceverification', function () {
    SEOTools::setTitle('appointment');
    SEOTools::setDescription('This is my page description');
    return view('insuranceverification');
});


Route::get('/marketing', function () {
    SEOTools::setTitle('appointment');
    SEOTools::setDescription('This is my page description');
    return view('marketing');
});


Route::get('/patientrecall', function () {
    SEOTools::setTitle('appointment');
    SEOTools::setDescription('This is my page description');
    return view('patientrecall');
});


Route::get('/preandpostcaremessaging', function () {
    SEOTools::setTitle('appointment');
    SEOTools::setDescription('This is my page description');
    return view('preandpostcaremessaging');
});


Route::get('/reputation', function () {
    SEOTools::setTitle('appointment');
    SEOTools::setDescription('This is my page description');
    return view('reputation');
});


Route::get('/virtualmeetingroom', function () {
    SEOTools::setTitle('appointment');
    SEOTools::setDescription('This is my page description');
    return view('virtualmeetingroom');
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

Route::get('frame', function() {
    return view('botman');
});