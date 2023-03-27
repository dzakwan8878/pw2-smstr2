<?php
$profileArray = [
    [
        "nama" => "Dzakwan Firdaus", //string
        "kelas" => "TI06",//string
        "ipk" => 3.43//integer
     ], [
        "nama" => "Juno Abdullah", 
        "kelas" => "TI06",
        "ipk" => 3.33
    ]   
];

foreach ($profileArray as $profile){
    echo $profile['nama'];
}