<!DOCTYPE HTML>
<html>
<?php

$message = array("message" => 'La superficie dans la ville de ' . $new_villes->getNom() . ' est de ' . $new_villes->getSurface() . ' km');
echo json_encode($message, JSON_UNESCAPED_UNICODE);


?></body>
</html>