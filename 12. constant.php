<?php 

//define =tidak bisa digunakan dalam class
//const = bisa digunakan didalam class

// define('NAMA', 'Ryan Dinul Fatah');

// echo NAMA;

// echo "<br>";

// const UMUR = 16;
// echo UMUR;

// class coba {
// 	const NAMA = 'Ryan Dinul Fatah';
// }

// echo coba::NAMA;

// echo __FILE__;

// function coba() {
// 	return __FUNCTION__;
// }
// echo coba();

class coba {
	public $kelas = __CLASS__;
}

$obj = new coba;
echo $obj->kelas;

 ?>