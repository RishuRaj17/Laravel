<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rishu', function () {
    return ('Welcome Rishu!');
});

Route::get("/af",function(){
    return "<b>Lund ka class</b>";
});

Route::get("/kartik/{id}",function($id){
    return "<b>My id is: ".$id."</b>";
});

Route::get('/redir', function(){
    if(false){
        return redirect("ab");
    }
});

Route::group(["perfix" => "lpu"], function(){
    Route::get("/cse", function(){
        return "Kartick is working at LPU";
    });

    Route::get("it", function(){
        return "Paris Olympics 2k24";
    });
});

Route::get('/form', function () {
    return view('user_form');
 });



 Route::post('get-userdata', function () {
    dd(request()->all());
});





Route::get('/student',[studentInsertController::class, 'insert from']);
Route::post('/create',[studentInsertController::class, 'insert']);

Route::get('/cricket/create',[CricketController::class, 'create'])->name('cricket');
Route::get('/cricket/store',[CricketController::class, 'store'])->name('cricket');

route::get('view-records',[studentInsertController::class, 'student_list']);
route::get('edit/{id}', [studentInsertController::class, 'edit']);



?>