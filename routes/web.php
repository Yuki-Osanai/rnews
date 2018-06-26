<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'NewspostsController@index');
Route::get('mypage','NewspostsController@mypage')->name('mypage.show');
Route::get('ichiran','NewspostsController@ichiran')->name('ichiran');
Route::get('ranking/favorite', 'RankingController@ranking')->name('ranking.favorite');


Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => 'auth'], function () {
Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
});
Route::group(['prefix' => 'users/{id}'], function () {
Route::post('favorite', 'UserFavoriteController@store')->name('user.favorite');
Route::delete('unfavorite', 'UserFavoriteController@destroy')->name('user.unfavorite');
Route::get('favoritings', 'UsersController@favoritings')->name('users.favoritings');
Route::get('favorites', 'UsersController@favorites')->name('users.favorites');
    });


Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'UsersController');
    Route::resource('newsposts', 'NewspostsController', ['only' => ['store', 'destroy']]);
});


