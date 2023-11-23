<?php
$nilai = 20;
$grade = "Karna Bodo";
if ($nilai > 90){
    $grade = "A";
} elseif($nilai > 80){
    $grade = "B";
}elseif($nilai > 70){
    $grade = "C";
}elseif($nilai > 60){
    $grade = "D";
}elseif($nilai > 50){
    $grade = "Tidak Lulus";
} 
echo "Nilai anda: $nilai<br>";
echo "Grade: $grade"; 
?>