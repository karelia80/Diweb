<?php
//Bucles :
/* dos tipos indefinidos "empiezas pero la condicion del bucle no sabes cuando va a terminar, se hace con while
El bucle definido se hace con el for, sabes cuando va a terminar el bucle controlas la iteracion*/

//bucle indefindo while
$a = 1;
while ($a <= 10) {
    echo "$a <br>";
    $a++;
}
echo "---------------------------<br>";
//bucle definido (este es el que entra en el examen)

/*tiene tres partes: inicio, condicion, modificacion*/

for ($a = 1; $a <= 10; $a++) {
    echo "$a <br>";
}
echo "----------------------------------<br>";

for ($a = 1; $a <= 10; $a++) {
    if ($a == 5);
    echo "$a <br>";
}

echo "---------------------------<br>";
//bucle completo (entra en el exam) foreach es el que tiene mas control FOREACH
foreach (range(1,10) as $a) {
    echo "$a <br>";
}

