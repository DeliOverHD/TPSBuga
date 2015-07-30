<?php

$strNombre = filter_input(INPUT_POST, 'inputNombre');

echo $strNombre . "Gracias por acudir a nuestra app";

$numEdad = filter_input(INPUT_POST, 'inputEdad');
$strSexo = filter_input(INPUT_POST, 'sexo');
$strVestuario = filter_input(INPUT_POST, 'inputVestuario');


if ($numEdad < 18 && $strSexo && $strVestuario){
    echo 'Lo siento, pero tu no puedes asistir a ningúno de nuestros lugares de ocio. ¡Buenas noches!';
}
