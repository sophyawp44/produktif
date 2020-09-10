<?php
class mobil{
    public $nama, $merk, $warna, $kecepatanmaksimal, $jumlahpenumpang; 

    public function tambahkankecepatan(){
        return "kecepatan bertambah";

    }

}
class Mobilsport extends mobil{
    public $turbo = false;
    
    public function aktifkanturbo(){
        $this->turbo=false;
        return "turbo diaktifkan"; 
    }
}
$mobil = new mobilsport();
    echo $mobilku->tambahkecepatan();
    echo "<br>";
    echo $mobilku->aktifkanturbo();
?>