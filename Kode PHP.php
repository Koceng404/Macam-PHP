#1 Hitung baris

<?php
for ($i= 1; $i <= 5; $i++) //berulang 5x
{
sleep(2);

$data = 'counter.txt';
// menghitung jumlah baris
$baris = count(file($data));


    $angka = ''.$baris.'';
    $angka_format = number_format($angka,0,",","."); //di jadikan 10000 menjadi 10.000


$dataString = rand(0,9)."\n";                 // menyimpan nomer acak dan diurutkan kebawah        
$fWrite = fopen("counter.txt", "a");      
$wrote  = fwrite($fWrite, $dataString);
fclose($fWrite);

$data = 'counter.txt';
// menghitung jumlah bari
$baris = count(file($data));

echo $angka_format. " Baris
";  

}
?>
