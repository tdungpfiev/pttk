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

Route::get('/', function () {
    return view('welcome');
});

//trang chu
Route::get('home', 'pagescontroller@index');

//giao dien main cua quan ly tai khoan
Route::get('/quanlyTK', 'pagescontroller@index1');



Route::get('quanlyTK/xemTK/{id}', 'quanlyTK@xemTK');

Route::get('quanlyTK/suaTK/{id}', 'quanlyTK@suaTK');

Route::get('quanlyTK/xoaTK/{id}', 'quanlyTK@xoaTK');


Route::get('quanlyTK/nhom', 'quanlyTK@nhom');

Route::get('quanlyTK/nhom/xemNhom', 'quanlyTK@xemNhom');

Route::get('quanlyTK/nhom/xoaNhom', 'quanlyTK@xoaNhom');

Route::get('quanlyTK/nhom/thongkeNhom', 'quanlyTK@thongkeNhom');


?>