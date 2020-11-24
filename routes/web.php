<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactingController;
use App\Http\Controllers\Empcontroller;

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


/**home* */

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/mywork', function () {
    return view('mywork');
})->name('mywork');

Route::get('/resume', function () {
    return view('resume');

})->name('resume');
Route::post('/contact/store' , [ContactingController::class,'store'])->name('contact.store');
Route::get('/contact' , [ContactingController::class,'index'])->name('contact.index');

/**mywork* */


/**managment* */
Route::get('/ems' , [Empcontroller::class,'index'])->name('ems.index');
Route::get('/ems/create' , [Empcontroller::class,'create'])->name('ems.create');
Route::post('/ems/store' , [Empcontroller::class,'store'])->name('ems.store');
Route::get('/ems/edit/{id}' , [Empcontroller::class,'edit'])->name('ems.edit');
Route::get('/ems/show/{id}' , [Empcontroller::class,'show'])->name('ems.show');
Route::post('/ems/update/{id}' , [Empcontroller::class,'update'])->name('ems.update');
Route::get('/ems/delete/{id}' , [Empcontroller::class,'destroy'])->name('ems.delete');

/**restaurant* */

Route::get('mywork/restaurant', function () {
    return view('restaurant.restaurant');
})->name('restaurant');

/**shop* */
Route::get('mywork/shop', function () {
    return view('shop.shop');
})->name('shop');


/**commingsoon* */
Route::get('/mywork/photo', function () {
    return view('soon.photo');
})->name('photo');