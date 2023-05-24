<?
$var1 = "Afif"; //string
$var2 = 30; //integer
$var3 = 3.14; //float
$var4 = false; //boolean

$makanans = array('Soto', 'Bakso', 'Mie Ayam');

//1. Soto
//2. Bakso
//3. Mie Ayam

// echo "1. $makanans[0] <br>";
// echo "2. $makanans[1] <br>";
// echo "3. $makanans[2] <br>";

//Perulangan
// $nomor = 1;
// foreach ($makanans as $makanan) {
//     echo $nomor++ . ". $makanan <br>";
// }

for ($nilaiAwal = 0; $nilaiAwal < count($makanans); $nilaiAwal++) {
    echo $nilaiAwal + 1 . ". $makanans[$nilaiAwal] <br>";
}
