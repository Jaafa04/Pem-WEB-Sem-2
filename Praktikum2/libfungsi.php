<?php
function kelulusan($penentu){
    if ($penentu > 55 ){
        return "LULUS";
    } else {
        return "TIDAK LULUS";
    }
}

function grade($penentu){
    if ($penentu > 0 && $penentu < 35 ) {
        return "E";
    } elseif ($penentu > 36 && $penentu < 55) {
        return "D";
     }  elseif ($penentu > 56 && $penentu < 69 ) {
        return "C";
     } elseif ( $penentu > 70 && $penentu < 84 ) {
        return "B";
     } elseif ($penentu > 85 && $penentu < 100) {
        return "A";
     } else {
        return "I";
     }
}

function predikat($penentu){
    if ($penentu > 0 && $penentu < 35 ) {
        return "Sangat Kurang";
    } elseif ($penentu > 36 && $penentu < 55) {
        return "Kurang";
     }  elseif ($penentu > 56 && $penentu < 69 ) {
        return "Cukup";
     } elseif ( $penentu > 70 && $penentu < 84 ) {
        return "Memuaskan";
     } elseif ($penentu > 85 && $penentu < 100) {
        return "Sangat Memuaskan";
     } else {
        return "Tidak Ada";
     }
}


?>