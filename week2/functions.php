<?php

function age($birthdate){
    $date = new DateTime($birthdate);
    $now = new DateTime();
    $difference = $date->diff($now);
    return $difference->y;
}

function bmi ($heightFt, $heightIn, $weight){
    $heightIn = ($heightFt * 12) + $heightIn;
    $heightM = $heightIn * 0.0254;

    $weight = $weight / 2.20462;
    $bmi = $weight/($heightM * $heightM);
    return $bmi;
}

function bmiDesc($bmi){
    if($bmi <18.5){
        return "Underweight";
    }
    elseif($bmi >=18.5 && $bmi <= 24.9){
        return "Normal weight";
    }
    elseif($bmi>=25 && $bmi<29.9){
        return "Overweight";
    }
    else{
        return "Obese";
    }
}