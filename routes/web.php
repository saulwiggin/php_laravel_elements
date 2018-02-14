<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('marketing');
});
Route::get('/foo', function () {
    return 'Hello World';
});
Route::get('/landing', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/product1', function () {
    return view('product1');
});
Route::get('/product2', function () {
    return view('product2');
});
Route::get('/product3', function () {
    return view('product3');
});
Route::get('/upload', function () {
    return view('upload');
});
Route::get('/data', function () {
    return view('data');
});
Route::get('/reports', function () {
    return view('reports');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/ingredients', function () {
    return view('ingredients');
});
Route::get('/questionaire', function () {
    return view('questionaire');
});
Route::get('/geneticAgeCalculatorContainer', function () {
    return view('genetic_age');
});
Route::get('/adviceForGeneticAge', function () {
    return view('genetic_age_information');
});
Route::get('/receive', function () {
    return view('receive');
});
Route::get('/upload', function () {
    return view('upload');
});
Route::get('/theScience', function () {
    return view('encyclopedia');
});
Route::get('/static', function () {
    return view('static');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/my_genetics', function () {
    return view('genome_upload');
});
Route::get('/info', function () {
    return view('info');
});
Route::get('/mymarketing', function () {
    return view('my_marketing');
});
Route::get('s3-upload','S3Controller@imageUpload');
Route::post('s3-upload','S3Controller@imageUploadPost');
Route::get('/receive', 'Receive@index');
Route::post('/medium', 'stripe@medium');
Route::get('/stripe/full', 'stripe@full');
Route::post('/uploadTxtFile', 'upload@uploadFileToS3');

Auth::routes();

Route::get('/home', 'HomeController@index');
