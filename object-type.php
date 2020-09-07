<?php
class resto{
public $namaMakanan,
	   $jumlah, 
	   $harga;

public function getCetak(){
	return "$this->namaMakanan,   $this->jumlah   (Rp.$this->harga)";
}
public function __construct($namaMakanan="nama Makanan",$jumlah="jumlah",$harga=0){
	$this->namaMakanan = $namaMakanan;
	$this->jumlah=$jumlah;
	$this->harga=$harga;
 		}
 }

 		class cetakInforesto{
		public function cetakInfo($resto){
			$str="{$resto->getCetak()}";
			return$str;
		}
}
$resto1 = new resto("ayam bakar", "2 porsi", 30000);
$resto2 = new resto("seblak", "5 porsi", 10000);
$resto3 = new resto("nasi goreng","1 porsi", 15000);
$resto4 = new resto("ramen", "6 porsi", 40000);
$inforesto = new cetakInforesto();

echo "Meja standar : " . $resto1->getCetak();
echo "<br>";
echo "Meja eksekutif : " .$resto2->getCetak();
echo "<br>";
echo "Meja mewah : " .$resto3->getCetak();
echo "<br>";
echo "Meja VIP : " .$resto4->getCetak();
echo "<br>";
echo $inforesto->cetakInfo($resto3);
?>