<?php

// require_once 'APP/Produk/InfoProduk.php';
// require_once 'APP/Produk/Produk.php';
// require_once 'APP/Produk/Komik.php';
// require_once 'APP/Produk/Game.php';
// require_once 'APP/Produk/CetakInfoProduk.php'; // Atau bisa dipindahkan ke file lain, jd tinggal manggil 1 file

require_once 'App/init.php';
// require_once 'App/Service/User.php';

// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk1);
// echo $cetakProduk->cetak();

// echo "<hr>";

// new App\Produk\User();

use App\Service\User as ServiceUser;
use App\produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();

?>