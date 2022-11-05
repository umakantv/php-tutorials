<?php
    $input = array('foo' => 'baz');
    $keys = array('foo', 'bar');
    $a = array_fill_keys($keys, 'banana');

    print_r($a);
    print_r($input);
    $output = array_intersect_key($input, $a);
    print_r($output);
?>