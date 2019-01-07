<?php 

class produk {
	public $judul,
		   $penulis,
	       $penerbit,
	       $harga,
	       $jmlhalaman,
	       $waktumain;

	       
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0,$waktumain = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlhalaman = $jmlhalaman;
		$this->waktumain = $waktumain;
	}       
	       

	public function getLabel() {
		return "$this->penulis,$this->penerbit";
	}

	public function getInfoProduk() {
		//komik : Gintama | gorila, Shonen jump (rp.30000) - 100 Halaman.
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}

}


class Komik extends produk {
	public function getInfoProduk() {
		$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlhalaman} Halaman.";
		return $str;
	}
}

class Game extends produk {
	public function getInfoProduk() {
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktumain} Jam.";
		return $str;
	}
}


class cetakInfoProduk {
	public function cetak(produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
		return $str;
	}
}



$produk1 = new Komik("Gintama", "Gorila", "Shonen Jump", 30000,100, 0);

$produk2 = new Game("Watch Dog 2", "Flying Dutchman", "Ubisoft", 150000,0, 69);


// echo "Komik : " .$produk1->getLabel();
// echo "<br>";
// echo "Game : " .$produk2->getLabel();
// echo "<br>";
// $InfoProduk1 = new cetakInfoProduk();
// echo $InfoProduk1->cetak($produk1);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
 ?>