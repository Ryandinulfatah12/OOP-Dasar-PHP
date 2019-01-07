<?php 

class produk {
	public $judul,
		   $penulis,
	       $penerbit;
	protected $diskon = 0;

	private $harga;

	       
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}


	public function getHarga() {
		return $this->harga - ($this->harga * $this->diskon / 100);	
	}       
	       

	public function getLabel() {
		return "$this->penulis,$this->penerbit";
	}


	public function getInfoProduk() {
		//komik : Gintama | gorila, Shonen jump (rp.30000) - 100 Halaman.
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}

}


class Komik extends produk {
	public $jmlhalaman;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,$jmlhalaman = 0) {

		parent::__construct($judul, $penulis, $penerbit, $harga);
			
		$this->jmlhalaman = $jmlhalaman;

	}	

	public function getInfoProduk() {
		$str = "Komik : " . parent::getInfoProduk()." - {$this->jmlhalaman} Halaman.";
		return $str;
	}
}


//OVERRIDING
class Game extends produk {
	public $waktumain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,$waktumain = 0) {

		parent::__construct($judul, $penulis, $penerbit , $harga);

		$this->waktumain = $waktumain;
	}

	public function getInfoProduk() {
		$str = "Game : " . parent::getInfoProduk() . "- {$this->waktumain} Jam.";
		return $str;
	}

	public function setDiskon($diskon) {
		$this->diskon = $diskon;
	}
}


class cetakInfoProduk {
	public function cetak(produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
		return $str;
	}
}



$produk1 = new Komik("Gintama", "Gorila", "Shonen Jump", 30000,100);

$produk2 = new Game("Watch Dog 2", "Flying Dutchman", "Ubisoft", 150000, 69);


// echo "Komik : " .$produk1->getLabel();
// echo "<br>";
// echo "Game : " .$produk2->getLabel();
// echo "<br>";
// $InfoProduk1 = new cetakInfoProduk();
// echo $InfoProduk1->cetak($produk1);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
 ?>