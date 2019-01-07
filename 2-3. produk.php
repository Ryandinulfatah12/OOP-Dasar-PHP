<?php 

//Jual produk
//jualan komik
//jualan game
class produk {
	public $judul = "judul",
		   $penulis = "penulis",
	       $penerbit = "penerbit",
	       $harga = 0;

	public function getLabel() {
		return "$this->penulis,$this->penerbit";
	}       
}

// $produk1 = new produk();
// $produk1->judul = "Gintama";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "Watch Dog 2";
// $produk2->tambahPropery = "wkwkwkwk";
// var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "Gintama";
$produk3->penulis = "Gorila";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

// echo "Komik : $produk3->penulis,$produk3->penerbit";
// echo "<br>";
// echo $produk3->getLabel();
// echo "<hr>";


$produk4 = new produk();
$produk4->judul = "Watch Dog 2";
$produk4->penulis = "Flying Dutchman";
$produk4->penerbit = "Ubisoft";
$produk4->harga = 150000;

echo "Komik : " .$produk3->getLabel();
echo "<br>";
echo "Game : " .$produk4->getLabel();

 ?>