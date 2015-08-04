<?php

$strNombre = filter_input(INPUT_POST, 'inputNombre');

echo $strNombre . "Gracias por acudir a nuestra app";

$numEdad = filter_input(INPUT_POST, 'inputEdad');
$strSexo = filter_input(INPUT_POST, 'sexo');
$strVestuario = filter_input(INPUT_POST, 'inputVestuario');


if ($numEdad < 18 && $strSexo && $strVestuario){
    echo 'Lo siento, pero tu no puedes asistir a ningúno de nuestros eventos noturnos. ¡Buenas noches!';
} else if ($numEdad <=18 && $numEdad > 21 && $strSexo && $strVestuario) {
    echo 'Estás cordialmente invitado a la Chiquiteca, esperamos que disfrutes de la fiesta.';
} else if ($numEdad <=22 && $numEdad >39 && $strSexo && $strVestuario){
    echo 'Es un placer invitarle a nuestra discoteca con una rumba bestial.';
} else if ($numEdad >=40 && $strSexo && $strVestuario) {
    
}
    
