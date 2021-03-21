<?php

function kelulusan($nilai)
{
 if ($nilai > 55) {
     $status    = "LULUS";
    } else{
     $status    = "TIDAK LULUS";
 }
 return $status;
}

 //nomer2 grade nilai
function grade($nilai)
 {
 if ($nilai<=100 && $nilai>=85) {
   $grade       = "A";
 } elseif ($nilai<85 && $nilai>=70) {
   $grade       = "B";
 } elseif ($nilai<70 && $nilai>=56) {
   $grade       = "C";
 } elseif ($nilai<56 && $nilai>=36) {
   $grade       = "D";
 } elseif ($nilai<36 && $nilai>=0) {
   $grade       = "E";
 } else {
   $grade       = "I";
 }
 return $grade;
}


function predikat($grade){
 switch ($grade) {
   case "A":
     $predikat = "Sangat Memuaskan";
     break;
   case "B":
     $predikat = "Memuaskan";
     break;
   case "C":
     $predikat = "Cukup";
     break;
   case "D":
     $predikat = "Kurang";
     break;
   case "E":
     $predikat = "Sangat Kurang";
     break;
   default:
     $predikat = "Tidak Ada";
     break;
 }
 return $predikat;
}
 
?>