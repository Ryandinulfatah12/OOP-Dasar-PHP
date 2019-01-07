<?php 

require_once 'App/init.php';


// $produk1 = new Komik("Gintama", "Gorila", "Shonen Jump", 30000,100);

// $produk2 = new Game("Watch Dog 2", "Flying Dutchman", "Ubisoft", 150000, 69);


// $cetakProduk = new cetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();

// echo "<hr>";

//pemanggilan Namespace
use App\Service\User as ServiceUser;
use App\produk\User as produkUser;

new ServiceUser();
echo "<br>";
new produkUser();



 ?>