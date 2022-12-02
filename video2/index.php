
<?php include_once 'vendedor/autoload.php';

use App\CoffeeShop;

$products = [
['id' => 1, 'name' => 'negro', 'price' => 25],
['id' => 2, 'name' => 'latte', 'price' => 35],
['id' => 3, 'name' => 'capuchino', 'price' => 35],

];

$shop = new CoffeeShop();

$shop ->addProducts($products);

$menu = new \App\Menu();

echo $menu->view($shop->getProducts(), new \App\JsonMenuOutput() );