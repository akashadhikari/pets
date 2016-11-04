<?php

Route::get('/', [
    'uses'=>'\App\Http\Controllers\HomeController@index',
	'as'=>'home',
]);

Route::get('/alert', function () {
	return redirect()->route('home')->with('info','Hey! there.');
});

/**
* first we store pets detail, after the form has been submitted the owner contact information should be stored. 
*/
Route::get('/enterdetails',[
	'uses'=>'\App\Http\Controllers\BuyorSellController@getStarted',
	'as'=>'templates.petsrecord.enterdetails'
	]);

Route::post('/enterdetails',[
	'uses'=>'\App\Http\Controllers\BuyorSellController@postPetsDetails',
	]);
/**
* for owner contact
*/

Route::get('/yourcontact',[
	'uses'=>'\App\Http\Controllers\BuyorSellController@getContactDetails',
	'as'=>'templates.petsrecord.contactdetails'
	]);

Route::post('/yourcontact',[
	'uses'=>'\App\Http\Controllers\BuyorSellController@postContactDetails',
	]);

/**
* like store where all kinds of pets details are displayed.
*/
Route::get('/viewall/posts',[
	'uses'=>'\App\Http\Controllers\BuyorSellController@viewAllposts',
	'as'=>'templates.petsrecord.viewallposts'
	]);

/**
* all the lost details
*/

Route::get('/lostandfound',[
	'uses'=>'\App\Http\Controllers\lostandfoundController@getLostAndFound',
	'as'=>'templates.lostandfound.index'
	]);

/**
* lost pets information form
*/
Route::get('/lostandfound/lost/enterdetails',[
	'uses'=>'\App\Http\Controllers\lostandfoundController@getLostDetails',
	'as' => 'templates.lostandfound.enterdetails'
	]);

Route::post('/lostandfound/lost/enterdetails',[
	'uses'=>'\App\Http\Controllers\lostandfoundController@postLostDetails',
	]);
