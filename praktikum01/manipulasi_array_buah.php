<?php
$arrayBuah = ["Semangka","Pepaya","Mangga","Durian"];

//mengurutkan array
sort($arrayBuah);

//menghapus nilai array terakhir
array_pop($arrayBuah);

//menghapus spesifik nilai pada array
unset($arrayBuah[2]);

//menambahkan nilai terakhir pada array
array_push($arrayBuah, "Pisang");

//menghapus nilai pertama pada array
array_shift($arrayBuah);

//menambahkan nilai pertama pada array
array_unshift($arrayBuah, "Mengkudu")

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}