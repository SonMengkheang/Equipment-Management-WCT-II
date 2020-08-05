<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('frontend.homepage');
//});

Route::get('/borrowItemList',function (){
    return view('frontend.borrowItemList');
});

Route::get('/homepage/borrowItem/{id}',function (){
    return view('frontend.borrowItemDetail');
});

Route::get('/homepage/createClass',function (){
    return view('frontend.createClass');
});

Route::get('/homepage/joinClass',function (){
    return view('frontend.joinClass');
});

Route::get('homepage/yourProfile',function (){
    return view('frontend.userProfileDetail');
});


// create route group for dashboard that admin only can access
Route::group(['prefix'=>'dashboard', 'middleware'=>['auth','auth.admin']], function () {

    // dashboard index
    Route::get('/',function (){
        return view('backend.dashboard');
    });


    // class controller
    // class index
    Route::get('/classes','ClassController@index')->name('classes.index');
    // create class
    Route::post('/classes/create','ClassController@store')->name('classes.store');
    // edit class by id
    Route::get('/classes/edit/{id}','ClassController@edit');

    // delete class by id
    Route::delete('/classes/delete/{id}','ClassController@destroy')->name('classes.destroy');

    //need to be fixed ...
    Route::patch('/classes/update/{id}','ClassController@update')->name('classes.update');






    Route::get('/users',function (){
        return view('users.usersList');
    });

    Route::get('/dashboard/users/profile',function (){
        return view('users.usersDetailProfile');
    });

    Route::get('/borrowers',function (){
        return view('borrowers.classCard');
    });

    Route::get('/borrowerList',function (){
        return view('borrowers.borrowersList');
    });

    Route::get('/borrowers/class/id',function (){
        return view('borrowers.borrowersCard');
    });



    // Item controller
    //
    Route::get('/products','ProductsController@Index')->name('products.index');
    // Add New Item
    Route::get('/products/create','ProductsController@Create')->name('products.create');
    Route::post('/products/store','ProductsController@Store')->name('products.store');
    // Update Item by ID
    Route::get('/products/edit/{id}','ProductsController@Edit');
    Route::patch('/products/update/{id}','ProductsController@Update')->name('products.update');
    //Delete Item by ID
    Route::get('/products/delete/{id}','ProductsController@Delete');
    //show Item Detail by ID
    Route::get('/products/show/{id}','ProductsController@Show');

});




Auth::routes();

// Home Page route
Route::get('/', 'HomeController@index')->name('home');



