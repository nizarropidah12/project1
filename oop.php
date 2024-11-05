<?php
    Class Produk {
           public $sku = "002";
           public $merek = "Lenovo";
           public $jumlah = "10"
           public $harga = 3000000;
        public funcition pesan Produk () {
            return “Lenovo 110”;
            }
  }
$televisi = new Produk();
echo $televisi -> sku;
echo $televisi -> pesan Produk();

