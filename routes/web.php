<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestControl;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('about', function(){
    // return 'ini abotu page';
    return view('info.about');
});

Route::get('contact', function(){
    return [
        'name' => 'jhon deo',
        'age' => '24',
        'location' => 'usa'
    ];
});

/* Route::post();

/**
 * ___________________________________________________________________
 * ROUTE METHODS
 * ___________________________________________________________________
 * */
/**
 * 1. GET
 * 2. POST
 * 3. PUT
 * 4. PATCH
 * 5. DELETE
 */

/**
 * ___________________________________________________________________
 * ROUTE PARAMETERS
 * ___________________________________________________________________
 * */


/**Route::get('person/{id_of_person}', function(){
    return 'kenara';
});
*/

Route::get('person/{id?}', function($id = NULL){
    return [
        'id' => $id,
        'name' => 'kenara',
    ];
});

// Route::get('person/{id}/post/{post_id}', function($id, $postId){
//     return [
//         'id' => $id,
//         'name' => 'kenara',
//         'post_id' => $postId
//     ];
// });


Route::get('animals', function(){
    return 'anjing dan kucing';
})->name('animals');

Route::group(['as'=> 'animals.', 'prefix' => 'animals'], function(){
    Route::get('dog', function(){
        return 'guk-guk!';
    })->name('anjing');

    Route::get('cat', function(){
        return 'miaw!';
    })->name('kucing');

    Route::get('monkey', function(){
        return 'ho ho!';
    })->name('monyet');
});

Route::get('blade-test', function() {
    return view('blade-test');
})->name('blade-test');

Route::get('contact', [TestControl::class, 'contact'])->name('contact');
Route::get('contact/store', [TestControl::class, 'store'])->name('contact.store');


Route::resource('blog', BlogController::class);
