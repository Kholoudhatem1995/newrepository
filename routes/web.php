<?php

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
Route::get('test','NewsController@test');
Route::post('test/1',function(Illuminate\Http\Request $request){
    return $request->all();

});
/*
Route::get('/users/{id?}', function ($id=null) {
    return 'welcome to user from id =>'.$id ;
})->where('id','[1-9]');
****************************************
*/

/*
Route::view('/master/back' , 'back.layouts.master');
Route::view('/master/front' , 'front.Layouts.master');
Route::get('/front/index' , 'HomePageController@index');
Route::get('/category/{id}' , 'HomePageController@adsByCategory');
*******************************************************
*/

/*
Route::get('test', function () {
    return '
    <form method="POST" action="anyroute">
    <input type="hidden" name="_token" value="'.csrf_token().'"/>
    <input type="text" name="foo"/>
    <input type="submit" value="send"/>
    <input type="hidden" name="_method" value="post" />
     </form> ';
});

Route::any('anyroute', function () {
    return 'welcome frome any route'.request('foo');
});



Route::post('test', function () {
    return 'welcome'.request('foo');
});

Route::patch('test', function () {
    return 'welcome'.request('foo');
});

Route::delete('test', function () {
    return 'welcome'.request('foo');
});
******************************************************
*/


