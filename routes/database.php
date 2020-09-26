<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function(){
    return "Database Manager";
});
Route::get('/serials', function (){
    DB::table('serials')->truncate();
    return "ข้อมูลถูกลบหมดแล้ว";
});
