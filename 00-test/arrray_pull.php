<?php
    function array_pull(&$array, $key, $default = null)
    {
        return Arr::pull($array, $key, $default);
    }

    $input = [
        [
            'merchant_ids' => ['abcd', 'efgh'],
            'type' => 'what'
        ]
    ];

    $mids = array_pull($input, 'merchant_ids');

    print_r($output);

?>