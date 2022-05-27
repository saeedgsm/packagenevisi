<?php

use Illuminate\Support\Facades\Route;

$namespace = 'Survey\Http\Controller';

 Route::group([
     'namespace'=>$namespace,
     'prefix'=>'audit',
     'middleware'=>'web'
 ],function (){
     Route::get('/','SurveyController@audit');
     Route::get('/view','SurveyController@view')->name('survey');
     Route::get('/add','SurveyController@add')->name('add.survey');
     Route::post('/survey-store','SurveyController@store')->name('store.survey');
 });
