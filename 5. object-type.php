<?php 

class produk {
	public $judul,
		   $penulis,
	       $penerbit,
	       $harga;
	       
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}       
	       

	public function getLabel() {
		return "$this->penulis,$this->penerbit";
	}       
}


class cetakInfoProduk {
	public function cetak(produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
		return $str;
	}
}


$produk1 = new produk("Gintama", "Gorila", "Shonen Jump", 30000);

$produk2 = new produk("Watch Dog 2", "Flying Dutchman", "Ubisoft", 150000);


echo "Komik : " .$produk1->getLabel();
echo "<br>";
echo "Game : " .$produk2->getLabel();
echo "<br>";
$InfoProduk1 = new cetakInfoProduk();
echo $InfoProduk1->cetak($produk1);

 ?>