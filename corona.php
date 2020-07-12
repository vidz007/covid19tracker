<?php
    $data = file_get_contents('https://pomber.github.io/covid19/timeseries.json');
    $coronadata = json_decode($data);
    echo "<pre>";
    print_r($coronadata)
?>