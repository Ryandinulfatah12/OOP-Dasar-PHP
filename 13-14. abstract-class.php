<?php 

abstract class produk {
	private $judul,
		   $penulis,
	       $penerbit,
	       $harga,
		   $diskon = 0;

	       
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}


	public function setJudul($judul) {
		$this->judul = $judul;
	}

	public function getJudul() {
		return $this->judul;
	}

	public function setpenulis() {
		$this->penulis = $penulis;
	}

	public function getpenulis() {
		return $this->penulis;
	}

	public function setpenerbit() {
		$this->penerbit = $penerbit;
	}

	public function getpenerbit() {
		return $this->penerbit;
	}

	public function setharga() {
		$this->harga = $harga;
	}

	public function getHarga() {
		return $this->harga - ($this->harga * $this->diskon / 100);	
	}

	public function setDiskon($diskon) {
		$this->diskon = $diskon;
	}       

	public function getDiskon() {
		return $this->diskon;
	}
	       
	public function getLabel() {
		return "$this->penulis,$this->penerbit";
	}


	abstract public function getInfoProduk();

	public function getInfo() {
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
		$str = "Komik : " . $this->getInfo()." - {$this->jmlhalaman} Halaman.";
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
		$str = "Game : " . $this->getInfo() . "- {$this->waktumain} Jam.";
		return $str;
	}

}


class cetakInfoProduk {
	public $daftarProduk = array();

	public function tambahProduk(produk $produk) {
		$this->daftarProduk[] = $produk;
	}

	public function cetak() {
		$str = "DAFTAR PRODUK : <br>";

		foreach ($this->daftarProduk as $p) {
			$str .= "- {$p->getInfoProduk()} <br>";
		}

		return $str;
	}
}



$produk1 = new Komik("Gintama", "Gorila", "Shonen Jump", 30000,100);

$produk2 = new Game("Watch Dog 2", "Flying Dutchman", "Ubisoft", 150000, 69);


$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

 ?>