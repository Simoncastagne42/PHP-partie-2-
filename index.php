<?php


// ## Exercice 1
$age = 30;
if ($age >= 18) {
    echo "Vous etes majeur" . "<br>";
} else {
    echo "Vous etes mineur" . "<br>";
}

// ## Exercice 2
$isEasy = false;
if ($isEasy === true) {
    echo "C'est facile !!";
} else {
    echo "C'est difficile !!!" . "<br>";
}

echo $isEasy ? "C'est facile...<br>" : "C'est difficile... <br>";

// ## Exercice 3
$age = 2;
$gender = "femme";

if ($gender === "homme" && $age >= 18) {
    echo "Vous êtes un homme et vous êtes majeur <br> ";
} elseif ($gender === "homme" && $age <= 18) {
    echo "Vous êtes un homme et vous êtes mineur <br>";
} elseif ($gender === "femme" && $age >= 18) {
    echo "Vous êtes une femme et vous êtes majeur <br>";
} else {
    echo "Vous êtes une femme et vous êtes mineur <br>";
}

## Exercice 4
// $magnitude = 1;
// if ($magnitude === 1) {
//     echo "Micro-séisme impossible à ressentir.<br>";
// } elseif ($magnitude === 2) {
//     echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.<br>";
// } elseif ($magnitude === 3) {
//     echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.<br>";
// } elseif ($magnitude === 4) {
//     echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.<br>";
// } elseif ($magnitude === 5) {
//     echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.<br>";
// } elseif ($magnitude === 6) {
//     echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.<br>";
// } elseif ($magnitude === 7) {
//     echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.<br>";
// } elsif ($magnitude === 8) {
//     echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.<br>";
// } elseif ($magnitude === 9) {
//     echo "Séisme capable de tout détruire sur une très vaste zone<br>";
// }

$magnitude = 9;
switch ($magnitude) {
    case 1:
        echo "Micro-séisme impossible à ressentir.<br>";
        break;
    case 2:
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.<br>";;
        break;
    case 3:
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.<br>";
        break;
    case 4:
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.<br>";
        break;
    case 5:
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.<br>";
        break;
    case 6:
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.<br>";
        break;
    case 7:
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.<br>";
        break;
    case 8:
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.<br>";
        break;
    case 9:
        echo "Séisme capable de tout détruire sur une très vaste zone<br>";
        break;
}

// ## Exercice 5
$gender = "homme";
if ($gender ==="homme") {
echo "C'est un developpeur !!!<br>";
}else {
echo "C'est une developpeuse!!!<br>";
}
// ## Exercice 6
$age = 2;
if ($age >= 18) {
    echo "Tu es majeur<br>";
} else {
    echo "Tu n'es pas majeur<br>";
}

// ## Exercice 7
$isOk = false;
if ($isOk===true) {
echo "C'est OK<br>";
} else {
echo "C'est pas bon !!!<br>";
}

// ## Exercice 8
echo $isOk ? "c'est ok !!!<br>" : "c'est pas bon !!! <br>";