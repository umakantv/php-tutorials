<?php

$typeIndexMap = [
    'PROPRIETORSHIP'         => 1,
    'INDIVIDUAL'             => 2,
    'PARTNERSHIP'            => 3,
    'PRIVATE_LIMITED'        => 4,
    'PUBLIC_LIMITED'         => 5,
    'LLP'                    => 6,
    'NGO'                    => 7,
    'EDUCATIONAL_INSTITUTES' => 8,
    'TRUST'                  => 9,
    'SOCIETY'                => 10,
    'NOT_YET_REGISTERED'     => 11,
    'OTHER'                  => 12,
    'HUF'                    => 13,
];

$typeIndexFlipped = array_flip($typeIndexMap);

print_r($typeIndexFlipped);

print_r($typeIndexFlipped[4]);

?>