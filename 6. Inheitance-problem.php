<?php 

class produk {
	public $judul,
		   $penulis,
	       $penerbit,
	       $harga,
	       $jmlhalaman,
	       $waktumain,
	       $tipe;
	       
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0,$waktumain = 0, $tipe) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlhalaman = $jmlhalaman;
		$this->waktumain = $waktumain;
		$this->tipe = $tipe;
	}       
	       

	public function getLabel() {
		return "$this->penulis,$this->penerbit";
	}

	public function getInfoLengkap() {
		//komik : Gintama | gorila, Shonen jump (rp.30000) - 100 Halaman.
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if ($this->tipe == "Komik") {
			$str .= "{$this->jmlhalaman} Halaman.";
		} elseif ($this->tipe == "Game") {
			$str .= " ~ {$this->waktumain} jam.";
		}

		return $str;
	} 

}


class cetakInfoProduk {
	public function cetak(produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
		return $str;
	}
}


$produk1 = new produk("Gintama", "Gorila", "Shonen Jump", 30000,100, 0, "Komik");

$produk2 = new produk("Watch Dog 2", "Flying Dutchman", "Ubisoft", 150000,0, 69,"Game");


// echo "Komik : " .$produk1->getLabel();
// echo "<br>";
// echo "Game : " .$produk2->getLabel();
// echo "<br>";
// $InfoProduk1 = new cetakInfoProduk();
// echo $InfoProduk1->cetak($produk1);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
 ?>