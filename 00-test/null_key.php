<?php

    $test = [
        'initiated' => [
            null => [
                'abc',
                'def'
            ]
        ]
    ];

    foreach ($test as $oldStatus => $oldSubstatusMap) {

        foreach ($oldSubstatusMap as $oldSubstatus => $newState) {

            // $newStatus = $newState[0];
            // $newSubstatus = $newState[1];

            print_r($oldStatus);
            print_r($oldSubstatus);
            print_r($newState);
        }
    }

?>