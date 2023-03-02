<?php

    try {

        $variable = 'New';

        throw new Error('Some error');
    }
    catch(Throwable $ex)
    {
        print_r($variable);
    }

