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
    return view('home');
})->name('home');
Route::get('/prodotti', function () {
    $paste = config('pasta');
    $lunghe=[];
    $corte=[];
    $cortissime=[];
    foreach($paste as $item){
        switch($item['tipo']){
            case 'corta':
                $corte[] = $item;
            break;
            
            case 'lunga':
                $lunghe[] = $item;
            break;

            case 'cortissima':
                $cortissime[] = $item;
            break;
        }
    }
    return view('prodotti',[
        'lunghe'=>$lunghe,
        'corte'=>$corte,
        'cortissime'=>$cortissime,
    ]);
})->name('prodotti');
Route::get('/news', function () {
    return view('news');
})->name('news');

