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
Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => 'role:administrator','prefix' => 's_admin'], function () {
		
		Route::get('/', function () {
				return view('index');
		});

		Route::group(['prefix' => 'companies'], function () {
                Route::get('companies/{company}/set', 'Companies\Companies@set');
                Route::resource('companies', 'Companies\Companies');
            });
			
			
            Route::group(['prefix' => 'search'], function () {
                Route::get('search/search', 'Search\Search@search');
                Route::resource('search', 'Search\Search');
            });

            Route::group(['prefix' => 'common'], function () {
                Route::get('import/{group}/{type}', 'Common\Import@create');
            });

            Route::group(['prefix' => 'items'], function () {
                Route::get('items/autocomplete', 'Items\Items@autocomplete');
                Route::post('items/totalItem', 'Items\Items@totalItem');
                Route::get('items/{item}/duplicate', 'Items\Items@duplicate');
                Route::post('items/import', 'Items\Items@import');
                Route::resource('items', 'Items\Items');
            });

            Route::group(['prefix' => 'auth'], function () {
                Route::get('logout', 'Auth\LoginController@logout')->name('logout');
                Route::get('users/autocomplete', 'Auth\Users@autocomplete');
                Route::get('users/{user}/read-bills', 'Auth\Users@readUpcomingBills');
                Route::get('users/{user}/read-invoices', 'Auth\Users@readOverdueInvoices');
                Route::get('users/{user}/read-items', 'Auth\Users@readItemsOutOfStock');
                Route::resource('users', 'Auth\Users');
                Route::resource('roles', 'Auth\Roles');
                Route::resource('permissions', 'Auth\Permissions');
            });

            
	});
	
	Route::group(['middleware' => 'role:member','prefix' => 'member'], function () {
		Route::get('/', [
			'uses' => 'Member\Dashboard@index', 'as' => 'membership_record'
		]);


		
	});
});

Route::group(['middleware' => 'guest'], function () {
	
	Route::get('/', function () {
				return view('index');
		});
		
    // Authentication Routes...
	Route::group(['prefix' => 'member'], function () {
		
		Route::group(['prefix' => 'auth'], function () {
			Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
			Route::post('login', 'Auth\LoginController@login');
			
			// Registration Routes...
			Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
			Route::post('register', 'Auth\RegisterController@register');

			// Password Reset Routes...
			Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
			Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
			Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
			Route::post('password/reset', 'Auth\ResetPasswordController@reset');
		});
		
	});
	
	Route::group(['prefix' => 's_admin'], function () {
		
		Route::group(['prefix' => 'auth'], function () {
			Route::get('login', 'Auth\LoginController@showLoginForm')->name('admin_login');
			Route::post('login', 'Auth\LoginController@login');
			Route::post('logout', 'Auth\LoginController@logout')->name('logout');
			
			// Password Reset Routes...
			Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
			Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
			Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
			Route::post('password/reset', 'Auth\ResetPasswordController@reset');
		});
		
	});
	});

//Forum Controller
Route::get('/forum', [
    'uses' => 'ForumController@forum', 'as' => 'forum'
]);
Route::get('/forum/post/add', [
    'uses' => 'ForumController@add_post', 'as' => 'add_forum_post'
]);
Route::get('/forum/post/1', [
    'uses' => 'ForumController@single_post', 'as' => 'view_single_post'
]);
Route::get('/get/all/post', [
    'uses' => 'ForumController@forum_posts_json'
]);
Route::post('/forum/post/save', [
    'uses' => 'ForumController@save_post', 'as' => 'save_forum_post'
]);

//Profile Controller
Route::get('profile', [
    'uses' => 'ProfileController@profile', 'as' => 'my_profile'
]);

//Users Controller
Route::get('/users/view', [
    'uses' => 'UsersController@view_users', 'as' => 'view_users'
]);