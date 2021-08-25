<?php

$message = array("message" => 'La superficie dans la ville de ' . $villes->getNom() . ' est de ' . $villes->getSurface() . ' km');
echo json_encode($message, JSON_UNESCAPED_UNICODE);


?>