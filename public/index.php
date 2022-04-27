<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require __DIR__ . '/../bootstrap.php';

define('APPNAME', 'My Phonebook');

session_start();

$router = new \Bramus\Router\Router();

// Auth routes
// $router->post('/logout', '\App\Controllers\Auth\LoginController@logout');
// $router->get('/register', '\App\Controllers\Auth\RegisterController@showRegisterForm');
// $router->post('/register', '\\App\Controllers\Auth\RegisterController@register');
// $router->get('/login', '\App\Controllers\Auth\LoginController@showLoginForm');
// $router->post('/login', '\App\Controllers\Auth\LoginController@login');

// Contact routes
$router->get('/', '\App\Controllers\HomeController@index');
$router->get('/home', '\App\Controllers\HomeController@index');
$router->get('/nike', '\App\Controllers\HomeController@nike');
$router->get('/adidas', '\App\Controllers\HomeController@adidas');
$router->get('/vans', '\App\Controllers\HomeController@vans');

$router->get('/chitietsanpham', '\App\Controllers\HomeController@chitiet');


// admin ////////////////////////////////////////////

    $router->get('/dangnhap','\App\Controllers\UserController@dangnhap');
    
    $router->get('/dangxuat','\App\Controllers\UserController@dangxuat');
    $router->post('/xuly_dangnhap','\App\Controllers\UserController@xuly_dangnhap');
    $router->get('/dangky','\App\Controllers\UserController@dangky');
    $router->get('/testUsername','\App\Controllers\UserController@testUsername');
    $router->post('/dangky','\App\Controllers\UserController@xuli_dangky');

    $router->get('/trangcanhan','\App\Controllers\UserController@trangcanhan');

    $router->get('/capnhatdiachi','\App\Controllers\UserController@capnhatdiachi');
    
    $router->get('/doimatkhau','\App\Controllers\UserController@doimatkhau');
    $router->post('/xuli_doimatkhau','\App\Controllers\UserController@xuli_doimatkhau');
  
//   Order ////////////////////////////////////////////////////////////
  
    $router->get('/giohang','\App\Controllers\OrderController@giohang');

    $router->get('/themvaogiohang','\App\Controllers\OrderController@themvaogiohang');
    $router->get('/addCartFromDetailProduct','\App\Controllers\OrderController@addCartFromDetailProduct');

    
    $router->get('/add','\App\Controllers\OrderController@addedOne')
    ;
    $router->get('/divide','\App\Controllers\OrderController@divideOne');
    $router->get('/del','\App\Controllers\OrderController@del');
    $router->get('/dathang','\App\Controllers\OrderController@dathang');


    $router->get('/dangxacnhan','\App\Controllers\OrderController@dangxacnhan');
    $router->get('/danggiao','\App\Controllers\OrderController@danggiao');
    $router->get('/dagiao','\App\Controllers\OrderController@dagiao');

    $router->get('/huydonhang','\App\Controllers\OrderController@huydonhang');
    $router->get('/tatdagiao','\App\Controllers\OrderController@tatdagiao');
    // admin////////////////////////////////////////////////////////
    $router->get('admin/login','\App\Controllers\AdminController@login');

    $router->get('admin/themsanpham','\App\Controllers\AdminController@themsanpham');

    $router->get('admin/dangxacnhan','\App\Controllers\AdminController@dangxacnhan');
    $router->get('admin/danggiao','\App\Controllers\AdminController@danggiao');
    $router->get('admin/dagiao','\App\Controllers\AdminController@dagiao');
    
    $router->get('admin/bomhang','\App\Controllers\AdminController@bomhang');

    $router->get('admin/nike','\App\Controllers\AdminController@nike');
    $router->get('admin/adidas','\App\Controllers\AdminController@adidas');
    $router->get('admin/vans','\App\Controllers\AdminController@vans');

    $router->get('admin/listUser','\App\Controllers\AdminController@listUser');
    
    $router->get('admin/duyetdonhang','\App\Controllers\AdminController@duyetdonhang');
    $router->get('admin/huydon','\App\Controllers\AdminController@huydon');
    $router->get('admin/xulibomhang','\App\Controllers\AdminController@xulibomhang');
    $router->get('admin/adminthemsanpham','\App\Controllers\AdminController@adminthemsp');
    $router->get('admin/thongtinkhachhang','\App\Controllers\AdminController@thongtintaikhoan');
    $router->get('admin/khoataikhoan','\App\Controllers\AdminController@khoataikhoan');

    $router->get('admin/danhsachnguoidung','\App\Controllers\AdminController@danhsachnguoidung');
    $router->get('admin/product','\App\Controllers\AdminController@product');
    $router->get('admin/gosanpham','\App\Controllers\AdminController@gosanpham');
    $router->get('admin/chitietsp','\App\Controllers\AdminController@chitietsp');

    $router->get('/admin/adminsuadoithongtinsanpham','\App\Controllers\AdminController@editPro');

    $router->post('/admin/admin-process','\App\Controllers\AdminController@processlogin');
    $router->get('/admin/logout','\App\Controllers\AdminController@logout');


    $router->get('/timkiem','\App\Controllers\HomeController@timkiem');

$router->run();
