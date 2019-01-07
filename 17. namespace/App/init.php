<?php 

// require_once 'produk/InfoProduk.php';
// require_once 'produk/produk.php';
// require_once 'produk/Komik.php';
// require_once 'produk/Game.php';
// require_once 'produk/cetakInfoProduk.php';

spl_autoload_register(function($class) {

	//App\produk\User = ["App", "produk", "User"]
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__ .'/produk/' . $class . '.php';

});

spl_autoload_register(function($class) {

	//App\Service\User = ["App", "Service", "User"]
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__ .'/Service/' . $class . '.php';

});


 ?>