<?php
require_once 'vendor/autoload.php';

//spl_autoload_register(function ($class_name){
//$file = __DIR__ . '/' . str_replace('\\', '/', $class_name) . '.php';
//if (file_exists($file)){
//    require_once $file;
//}else{
//    die('Error, Class not found.');
//}
//});

use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Helpers\ImageHelper;
use Models\Order;
use Models\Product;
use Models\User;

echo '<pre>';
$order = new Order();
$product = new Product();
$user = new User();
$orderContr = new MainController();
$dashContr = new DashboardController();
$image = new ImageHelper();
$main = new MainController();
$order = new Ordeer();
