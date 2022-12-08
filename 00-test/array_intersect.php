<?php

    $bigArray = ['abcd', 34, 54];

    $smallArray = [34, 45, 56];

    $output = array_intersect($bigArray, $smallArray);

    foreach ($output as $item) {
        print_r($item);
    }

    print_r($output);

?>