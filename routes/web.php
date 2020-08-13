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

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');


Route::resource('dependences', 'DependenceController');
Route::resource('type_documents', 'TypeDocumentController');
Route::resource('documents', 'DocumentController');
Route::resource('status-document', 'StatusDocumentController');
Route::resource('type-customers', 'TypeCustomerController');
Route::resource('type-obtainments', 'TypeObtainmentController');
Route::resource('titles', 'TitleController');
Route::resource('company', 'CompanyController');
Route::resource('contacts', 'ContactPersonController');
Route::resource('destinations', 'DestinationController');
Route::resource('gen-documents', 'GenDocumentController');

Route::get('municipios/{id}', 'DestinationController@getMunicipialities');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
