<?php

    $existing = [
        'a' => 0,
        'b' => 2
    ];

    $input1 = [
        'a' => 1,
        'd' => [
            'd.1' => 34
        ]
    ];

    $input2 = [
        'c' => 1,
        'd' => [
            'd.2' => 45
        ]
    ];

    $output = array_merge_recursive($existing, $input1, $input2);
    
    function getDefaultAssigneeTeam(?string $status, ?string $subStatus)
    {
    
        $statusAndSubStatusToAssigneeMap = [
            'INITIATED' => [
                'NONE' => 'BANK',
                null => 'BANK',
            ],
            'VERIFICATION_CALL' => [
                'IN_PROCESSING' => 'BANK',
            ]
        ];
        if($status == null)
        {
            return null;
        }
        
        if(array_key_exists($status, $statusAndSubStatusToAssigneeMap) === false)
        {
            return null;
        }

        $subStatuses = $statusAndSubStatusToAssigneeMap[$status];

        if(array_key_exists($subStatus, $subStatuses) === false)
        {
            return null;
        }

        return  $statusAndSubStatusToAssigneeMap[$status][$subStatus];
    }

    echo getDefaultAssigneeTeam('INITIATED', null);
    echo getDefaultAssigneeTeam('INITIATED', 'NONE');
    // echo getDefaultAssigneeTeam('INITIATED', null);

    print_r($output);
?>