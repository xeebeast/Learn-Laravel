<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');


			/*MVC*/
Route::any('mvc/view', 'MvcController@View');			
Route::any('mvc/controller', 'MvcController@Controller');			
Route::any('mvc/modal', 'MvcController@Modal');			
			/*END MVC*/

			/*Ajax*/
Route::any('ajax/genric_ajax', 'AjaxController@generiAjax');			
Route::any('ajax/genric_ajax_test', 'AjaxController@genericAjaxTest');			
			/*END Ajax*/

			/*Bootstrap */
Route::get('bootstrap/grid_system', 'BootstrapController@gridSystem');
Route::get('bootstrap/nav_bar', 'BootstrapController@navBar');
Route::get('bootstrap/colp_nav_bar', 'BootstrapController@collapseNav');
Route::get('bootstrap/carousel', 'BootstrapController@carousel');
Route::get('bootstrap/grid_option', 'BootstrapController@gridOptions');
			/*Bootstrap END*/

			/*Facebook*/
Route::any('facebook','FacebookController@facebook');			
Route::any('facebook/callback','FacebookController@callback');			
			/*End Facebook*/

			/*Twitter*/
Route::any('twitter','TwitterController@twitter');			
Route::any('twitter/callback','TwitterController@callback');			
			/*End Twitter*/

			/*Google*/
Route::any('google','GoogleController@google');			
Route::any('google/callback','GoogleController@callback');				
			/*End Google*/

			/*Admin Dashboard*/
Route::any('dashboard','AdminDashboardControllre@dashboard');			
			/*End Admin Dashboard*/

			/*Maps*/
Route::any('map','MapController@show');			
			/*END Maps*/

			/*Demo*/
Route::get('demo','AdminDashboardControllre@demo');
Route::get('demoResult','AdminDashboardControllre@demoResult');
			/*END Demo*/

