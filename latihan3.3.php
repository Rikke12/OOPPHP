<?php
class TokoPegadaianSyariah {
    var $namaToko;
    var $alamat;
    var $telepon;
    var $besarPinjaman;
    var $besarBunga;
    var $lamaAngsuran;


    public function __construct($namaToko, $alamat, $telepon, $besarPinjaman, $besarBunga, $lamaAngsuran) {
        $this->namaToko = $namaToko;
        $this->alamat = $alamat;
        $this->telepon = $telepon;
        $this->besarPinjaman = $besarPinjaman;
        $this->besarBunga = $besarBunga;
        $this->lamaAngsuran = $lamaAngsuran;
    }


    public function hitungTotalPinjaman() {
        $totalPinjaman = $this->besarPinjaman + ($this->besarPinjaman * ($this->besarBunga / 100));
        return $totalPinjaman;
    }


    public function tampilkanInfoPinjaman() {
        echo "Besaran pinjaman : Rp. " . number_format($this->besarPinjaman, 0, ',', '.') . "<br>";
        echo "Masukan besar bunga (%) : " . $this->besarBunga . "<br>";
        echo "Total pinjaman : Rp. " . number_format($this->hitungTotalPinjaman(), 0, ',', '.') . "<br>";
        echo "Lama Angsuran (bulan) :" . $this->lamaAngsuran . "<br>";
    }


    public function tampilkanInfoToko() {
        echo "Toko pegadaian Syariah". "<br>";
        echo "Jl " . $this->alamat . "<br>";
        echo "Telp. " . $this->telepon . "<br>";
    }
}


$toko = new TokoPegadaianSyariah("Nama Toko", "Alamat Toko", "Nomor Telepon", 1000000, 10, 5);
$toko->tampilkanInfoToko();
$toko->tampilkanInfoPinjaman();
?>