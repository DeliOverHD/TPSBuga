<?php

$strNombre = filter_input(INPUT_POST, 'inputNombre');

echo $strNombre . " gracias por acudir a nuestra app";

$numEdad = filter_input(INPUT_POST, 'inputEdad');
$strSexo = filter_input(INPUT_POST, 'sexo');

echo $numEdad;

if ($numEdad < 18){
    echo 'Lo siento, pero tu no puedes asistir a ningúno de nuestros eventos noturnos. ¡Buenas noches!';
} else if ($numEdad >=18 && $numEdad <= 21) {
    echo 'Estás cordialmente invitado a la Chiquiteca, esperamos que disfrutes de la fiesta.';
} else if ($numEdad >=22 && $numEdad <=39){
    echo 'Es un placer invitarle a nuestra discoteca con una rumba bestial.';
} else if ($numEdad >=40) {  
}
    if ($strSexo='Hombre'){
       include_once './Hombre.php';
           }
       if ($strSexo='Mujer') {
           include_once './Mujer.php';
}