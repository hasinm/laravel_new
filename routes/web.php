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
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/home/assignments', function () {
    return view('assignments');
});
Route::get('/css/project', function () {
    return view('css/facebookprojectcss');
});

Route::get('/bootstrap2', function () {
    return view('Bootstrap/facebookprojectxs');
});
Route::get('/bootstrap', function () {
    return view('Bootstrap/facebookproject');
});
Route::get('/javascript/', function () {
    return view('Javascript/facebookprojectjs');
});
Route::get('/html/as15/', function () {
    return view('html/Assignments/15');
});
Route::get('/html/as2/', function () {
    return view('html/Assignments/2');
});
Route::get('/html/as6/', function () {
    return view('html/Assignments/6');
});
Route::get('/html/as7/', function () {
    return view('html/Assignments/7');
});
Route::get('/html/as8/', function () {
    return view('html/Assignments/8');
});
Route::get('/html/as14/', function () {
    return view('html/Assignments/14');
});
Route::get('/css/as6/', function () {
    return view('css/CSS Assignments/Assignment6');
});
Route::get('/css/as9/', function () {
    return view('css/CSS Assignments/Assignment9');
});
Route::get('/css/as19/', function () {
    return view('css/CSS Assignments/Assignment19');
});
Route::get('/css/as5/', function () {
    return view('css/CSS Assignments/Assignment5');
});

Route::get('/html/project', function () {
    return view('html/facebookproject');
});
Route::get('/html/assignment', function () {
    return view('htmlassignments');
});
Route::get('/css/assignment', function () {
    return view('cssassignments');
});
Route::get('/bootstrap/assignment', function () {
    return view('bootstrapassignments');
});
Route::get('/javascript/assignment', function () {
    return view('javascriptassignment');
});
Route::get('/jquery/assignment', function () {
    return view('jqueryassignment');
});
Route::get('/bootstrap/as3', function () {
    return view('bootstrap/Assignments/Assignment3');
});
Route::get('/bootstrap/as4', function () {
    return view('bootstrap/Assignments/Assignment4');
});
Route::get('/bootstrap/as5', function () {
    return view('bootstrap/Assignments/Assignment5');
});
Route::get('/bootstrap/as6', function () {
    return view('bootstrap/Assignments/Assignment6');
});
Route::get('/bootstrap/as7', function () {
    return view('bootstrap/Assignments/Assignment7');
});
Route::get('/bootstrap/as8', function () {
    return view('bootstrap/Assignments/Assignment8');
});
Route::get('/bootstrap/as12', function () {
    return view('bootstrap/Assignments/Assignment12');
});
Route::get('/bootstrap/as19', function () {
    return view('bootstrap/Assignments/Assignment19');
});
Route::get('/bootstrap/as14', function () {
    return view('bootstrap/Assignments/Assignment14');
});
Route::get('/bootstrap/as15', function () {
    return view('bootstrap/Assignments/Assignment15');
});
Route::get('/bootstrap/as16', function () {
    return view('bootstrap/Assignments/Assignment16');
});
Route::get('/bootstrap/as19', function () {
    return view('bootstrap/Assignments/Assignment19');
});
Route::get('/bootstrap/as201', function () {
    return view('bootstrap/Assignments/Assignment201');
});
Route::get('/bootstrap/as202', function () {
    return view('bootstrap/Assignments/Assignment202');
});
Route::get('/bootstrap/as203', function () {
    return view('bootstrap/Assignments/Assignment203');
});
Route::get('/bootstrap/as21', function () {
    return view('bootstrap/Assignments/Assignment21');
});
Route::get('/bootstrap/as22', function () {
    return view('bootstrap/Assignments/Assignment22');
});
Route::get('/bootstrap/as27', function () {
    return view('bootstrap/Assignments/Assignment27');
});
Route::get('/bootstrap/as29', function () {
    return view('bootstrap/Assignments/Assignment29');
});
Route::get('/bootstrap/as38', function () {
    return view('bootstrap/Assignments/Assignment38');
});
Route::get('/bootstrap/as39', function () {
    return view('bootstrap/Assignments/Assignment39');
});
Route::get('/bootstrap/as40', function () {
    return view('bootstrap/Assignments/Assignment40');
});
Route::get('/bootstrap/as51', function () {
    return view('bootstrap/Assignments/Assignment51');
});
Route::get('/js/as1/', function () {
    return view('Javascript/assignments/jsassignment1');
});
Route::get('/js/as2/', function () {
    return view('Javascript/assignments/jsassignment2');
});
Route::get('/js/as3/', function () {
    return view('Javascript/assignments/jsassignment3');
});
Route::get('/js/as4/', function () {
    return view('Javascript/assignments/jsassignment4');
});
Route::get('/js/as5/', function () {
    return view('Javascript/assignments/jsassignment5');
});
Route::get('/js/as6/', function () {
    return view('Javascript/assignments/jsassignment6');
});
Route::get('/js/as7/', function () {
    return view('Javascript/assignments/jsassignment7');
});
Route::get('/js/as9/', function () {
    return view('Javascript/assignments/jsassignment9');
});
Route::get('/jquery/as3', function () {
    return view('jquery/assignments/jqassignment3');
});
Route::get('/jquery/as4', function () {
    return view('jquery/assignments/jqassignment4');
});
Route::get('/jquery/as5', function () {
    return view('jquery/assignments/jqassignment5');
});
Route::get('/jquery/as6', function () {
    return view('jquery/assignments/jqassignment6');
});
Route::get('/jquery/as7', function () {
    return view('jquery/assignments/jqassignment7');
});
Route::get('/jquery/as8', function () {
    return view('jquery/assignments/jqassignment8');
});
Route::get('/project', function () {
    return view('PROJECT/project');
});
Route::get('/products', function () {
    return view('PROJECT/gallery');
});
Route::get('/clothing', function () {
    return view('PROJECT/clothing');
});
Route::get('/contact', function () {
    return view('PROJECT/contact');
});




