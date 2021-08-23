<!DOCTYPE HTML>
<html>
<?php

$message = array("message" => 'La population dans la ville de ' . $new_villes->getNom() . ' est de ' . $new_villes->getPopulation() . ' habitants');
echo json_encode($message, JSON_UNESCAPED_UNICODE);


?></body>
</html>