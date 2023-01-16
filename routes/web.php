<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Route::get("/home",[HomeController::class,"index"]);
Route::get("/3home",[HomeController::class,"index3"]);



//Route::get('/addProduct', function () {
//    return view('addProduct', ['categoryID' => App\Models\Category::all()]);
//});

Route::get('/editRecruitment/{id}', [App\Http\Controllers\HomeController::class, 'editRecruitment'])->name('editRecruitment');

Route::get('/editPost/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('editPost');
Route::get('/GiveFeeback/{id}', [App\Http\Controllers\HomeController::class, 'specificCase'])->name('GiveFeedback');



Route::post('/feed1', [App\Http\Controllers\HomeController::class, 'feed1'])->name('feed1');



Route::post('/updatePost', [App\Http\Controllers\HomeController::class, 'update'])->name('updatePost');
Route::post('/updateRecruitment', [App\Http\Controllers\HomeController::class, 'updateRecruitment'])->name('updateRecruitment');

Route::get('/deletePost/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('deletePost');
Route::get('/deleteRecruitment/{id}', [App\Http\Controllers\HomeController::class, 'deleteRecruitment'])->name('deleteRecruitment');
Route::get('/deleteValuation/{id}', [App\Http\Controllers\HomeController::class, 'deleteValuation'])->name('deleteValuation');

Route::get('/rating', function () {
    return view('rating');
});
Route::post('rating/add', [App\Http\Controllers\HomeController::class, 'reviewstore'])->name('review.store');

Route::get('/product/{id}', [HomeController::class, 'showProduct']);
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

    Route::get('/addPost', function () {return view('addPost'); });

    Route::get('/addRecruitment', function () {return view('addRecruitment');});

    Route::get('/valuation', function () {return view('valuation');});


Route::post('/valutaion/store', [App\Http\Controllers\HomeController::class, 'addValuation'])->name('addValuation');

Route::post('/addPost/store', [App\Http\Controllers\HomeController::class, 'addpost'])->name('addPost');
Route::post('/addRecruitment/store', [App\Http\Controllers\HomeController::class, 'addRecruitment'])->name('addRecruitment');

Route::get('/viewPost', [App\Http\Controllers\HomeController::class, 'view'])->name('viewPost');
Route::get('/3home', [App\Http\Controllers\HomeController::class, 'viewpandr'])->name('3home');

Route::get('/feedback/{id}', [App\Http\Controllers\HomeController::class, 'showFeed'])->name('feedback');

Route::get('/viewRecruitment', [App\Http\Controllers\HomeController::class, 'viewRecruitment'])->name('viewRecruitment');
Route::get('/viewValuation', [App\Http\Controllers\HomeController::class, 'viewValuation'])->name('viewValuation');
Route::get('/viewMyValuation', [App\Http\Controllers\HomeController::class, 'viewMyValuation'])->name('viewMyValuation');

Route::get('send-email',function(){

    $mailData=[
        "name"=>"Test Name",
        "dob"=> "12/12/1998"
    ];
    Mail::to("xlchaii16@gmail.com")->send(new TestEmail($mailData));
    dd("mail Sent Successfully");
});


});
