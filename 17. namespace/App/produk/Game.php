<?php 

class Game extends produk implements InfoProduk {
	public $waktumain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,$waktumain = 0) {

		parent::__construct($judul, $penulis, $penerbit , $harga);

		$this->waktumain = $waktumain;
	}

	public function getInfo() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}

	public function getInfoProduk() {
		$str = "Game : " . $this->getInfo() . "- {$this->waktumain} Jam.";
		return $str;
	}

}

 ?>