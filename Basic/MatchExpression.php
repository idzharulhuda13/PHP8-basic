<?php

$transportaion = "Kapal";
$result = "";

// switch($transportaion)
// {
//     case "Mobil":
//     case "Motor":
//     case "Bus":
//         $result = "Transportasi Darat";
//         break;
//     case "Kapal":
//         $result = "Transportasi Laut";
//         break;
//     case "Pesawat":
//         $result = "Trasnportasi Udara";
//         break;
//     default:
//         $result = "Mohon maaf, Jenis transportasi yand anda masukan tidak dikenal";
// }

// echo $result;


// $transportaion = "Pesawat";
// $result = match($transportaion)
// {
//     "Mobil", "Motor", "Bus" => "Transportasi Darat",
//     "Kapal" => "Transportasi Laut",
//     "Pesawat" => "Transportasi Udara",
//     default => "Mohon maaf, Jenis transportasi yand anda masukan tidak dikenal"
// };

// echo $result;

// $total_baggage = 10;

// $result = match(true){
//     $total_baggage >= 50 => "Bagasi kena charge IDR 250.000",
//     $total_baggage >= 35 => "Bagasi kena charge IDR 230.000",
//     $total_baggage >= 30 => "Bagasi kena charge IDR 200.000",
//     $total_baggage >= 25 => "Bagasi kena charge IDR 150.000",
//     default => "Bagasi anda tidak kena charge"
// };

// echo $result;

$word = "kemarin saya pulang menggunakan gojek";

$result = match(true){
    str_contains($word, 'tokopedia') => "Kalimat anda mengandung kata sebuah online store",
    str_contains($word, 'gojek') => "Kalimat anda mengandung kata sebuah ojek online",
    str_contains($word, 'car') => "Kalimat anda mengandung kata sebuah otomotif",
    str_contains($word, 'cow') => "Kalimat anda mengandung kata sebuah binatang ternak",
    default => "kalimat anda tidak ada kata kata yang di data"
};

echo $result;