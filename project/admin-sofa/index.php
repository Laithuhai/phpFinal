<?php
require "functions.php";
$controller = @$_GET['controller'];
$action = @$_GET['action'];
if (!$controller){
    $controller = 'danhsach';
}
if (!$action){
    $action = 'index';
}
switch ($controller){
    case 'danhsach':
        switch ($action){
            case 'index':
                require "controller/danhsach/index-controller.php";
                break;
            case 'delete':
                require "controller/danhsach/delete-controller.php";
                break;
            case 'update':
                require "controller/danhsach/update-controller.php";
                break;
            case 'insert':
                require "controller/danhsach/insert-controller.php";
                break;
        }
        break;
    case 'sanpham':
        switch ($action){
            case 'index':
                require "controller/sanpham/index-controller.php";
                break;
            case 'delete':
                require "controller/sanpham/delete-controller.php";
                break;
            case 'update':
                require "controller/sanpham/update-controller.php";
                break;
            case 'insert':
                require "controller/sanpham/insert-controller.php";
                break;
        }
        break;
    case 'chatlieu':
        switch ($action){
            case 'index':
                require "controller/chatlieu/index-controller.php";
                break;
            case 'delete':
                require "controller/chatlieu/delete-controller.php";
                break;
            case 'update':
                require "controller/chatlieu/update-controller.php";
                break;
            case 'insert':
                require "controller/chatlieu/insert-controller.php";
                break;
        }
        break;
    case 'hang':
        switch ($action){
            case 'index':
                require "controller/hang/index-controller.php";
                break;
            case 'delete':
                require "controller/hang/delete-controller.php";
                break;
            case 'update':
                require "controller/hang/update-controller.php";
                break;
            case 'insert':
                require "controller/hang/insert-controller.php";
                break;
        }
        break;
    case 'kichco':
        switch ($action){
            case 'index':
                require "controller/kichco/index-controller.php";
                break;
            case 'delete':
                require "controller/kichco/delete-controller.php";
                break;
            case 'update':
                require "controller/kichco/update-controller.php";
                break;
            case 'insert':
                require "controller/kichco/insert-controller.php";
                break;
        }
        break;
    case 'mausac':
        switch ($action){
            case 'index':
                require "controller/mausac/index-controller.php";
                break;
            case 'delete':
                require "controller/mausac/delete-controller.php";
                break;
            case 'update':
                require "controller/mausac/update-controller.php";
                break;
            case 'insert':
                require "controller/mausac/insert-controller.php";
                break;
        }
        break;

    default:
        die("Khong controller nao duoc goi ca");
        break;
}