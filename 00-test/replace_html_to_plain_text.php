<?php
    $comment = '<div class=\"short-description\">
        <div class=\"short-description\">
        <div class=\"short-description\">
        <div class=\"short-description\">
        <div class=\"short-description\">
        <div class=\"short-description\">
        <div class=\"short-description\">
        <div class=\"short-description\">
        <div class=\"short-description\">
        <ul style=\"margin: 0px; padding: 0px; font-family: Tahoma, Verdana; color: #000000; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\">
            <li style=\"margin: 0px; padding: 0px; font-family: Tahoma, Verdana !important;\">Processor: Intel® Xeon® E5-2403 1.80GHz, 10M Cache, 6.4GT/s QPI, No Turbo, 4C, 80W, Max Mem 1066MHz</li>
            <li style=\"margin: 0px; padding: 0px; font-family: Tahoma, Verdana !important;\">Memory:&nbsp; 8GB (4x2GB) 1333MHz, Single Ranked LV RDIMMs up to 16GB</li>
            <li style=\"margin: 0px; padding: 0px; font-family: Tahoma, Verdana !important;\">Hard Drive: 1TB 7.2K RPM NL SAS 3.5-inch Hot Plug</li>
            <li style=\"margin: 0px; padding: 0px; font-family: Tahoma, Verdana !important;\">Storage Controller: H310 raid controller Support RAID 0, 1, 5, 10</li>
            <li style=\"margin: 0px; padding: 0px; font-family: Tahoma, Verdana !important;\">File Access Protocols: CIFS, NFS, FTP, SMB3.0, SMB Direct (RDMA)</li>
            <li style=\"margin: 0px; padding: 0px; font-family: Tahoma, Verdana !important;\">Internal Drive Support: 4 x 3.5\" hot-plug drive bays</li>
            <li style=\"margin: 0px; padding: 0px; font-family: Tahoma, Verdana !important;\">Power: 1 x 550W Power Supply (redundant)</li>
            <li style=\"margin: 0px; padding: 0px; font-family: Tahoma, Verdana !important;\">OS: Window Storage 2008 Workgroup R2 Edition</li>
            <li style=\"margin: 0px; padding: 0px; font-family: Tahoma, Verdana !important;\">Form Factor 1U rack mount system</li>
            <li style=\"margin: 0px; padding: 0px; font-family: Tahoma, Verdana !important;\">Warranty: 3 Year ProSupport and NBD On-site Service</li>
        </ul>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>';

    $pattern = '/<(.|\n\t)*?>/';
    $comment = preg_replace($pattern, '', $comment);
    // print_r($comment);
    $comment = preg_replace('/\s+/', ' ', $comment);
    // print_r($comment);
    $comment = str_replace(array("\r", "\n", "\t"), '', $comment);
    print_r($comment);
?>

