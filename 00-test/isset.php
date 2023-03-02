<?php

    $input = [1, 2, 3];
    
    $data = [];
    for ($i = 0; $i < 1000; $i++)
    {
        array_push($data, $i);
    }

    array_push($input, ...$data);

    // print_r($input);

    $arr = [
        'sales' => 0
    ];
    if (empty($arr['sales']) === false) {

        print_r("Yes");
    }

?>