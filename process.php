<?php

$planet = rand(1, 61);

$data = file_get_contents('https://swapi.co/api/planets/'.$planet);

echo $data;

?>