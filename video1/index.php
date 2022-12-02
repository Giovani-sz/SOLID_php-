<?php include_once 'vendedor/autoload.php';

use App\CoffeeShop;

$products = [
['id' => 1, 'name' => 'negro', 'price' => 25],
['id' => 2, 'name' => 'latte', 'price' => 25],
['id' => 3, 'name' => 'capuchino', 'price' => 25],

];

$shop = new CoffeeShop();

$shop ->addProducts($products);

$menu = new \App\Menu();

echo $menu->view($shop->getProducts());