<?php

    $existing = [
        'gstin'=> '22AAAAA0000A1Z5',
        'skip_dwt'=> 1,
        'green_channel'=> false,
        'feet_on_street'=> null,
        'appointment_source'=> 'mid_office',
        'skip_mid_office_call'=> 0,
        'gstin_prefilled_address'=> 1,
        'application_initiated_from'=> 'X_DASHBOARD',
    ];

    $input1 = [
        'rbl_new_onboarding_flow_declarations'=> [
            'seal_available'=> 1,
            'signboard_available'=> 1,
            'signatories_available_at_preferred_address'=> 1,
            'available_at_preferred_address_to_collect_docs'=> 1
        ]
    ];

    $input2 = [
        'agree_to_allocated_bank_and_amb'=> 1,
    ];

    $output = array_merge_recursive($existing, $input1, $input2);
    $output2 = array_merge($existing, $input1, $input2);

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

    // echo getDefaultAssigneeTeam('INITIATED', null);
    // echo getDefaultAssigneeTeam('INITIATED', 'NONE');
    // echo getDefaultAssigneeTeam('INITIATED', null);

    print_r($output);
    print_r($output2);
?>