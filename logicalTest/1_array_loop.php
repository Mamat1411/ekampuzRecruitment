<?php
    $aplikasi[1] = 'gtAkademik';
    $aplikasi[2] = 'gtFinansi';
    $aplikasi[3] = 'gtPerizinan';
    $aplikasi[4] = 'eCampuz';
    $aplikasi[5] = 'eOviz';

    $iteration = 1;
    $application = count($aplikasi);
    
    while ($iteration <= $application) {
        echo $aplikasi[$iteration] . "<br><br>";
        $iteration++;
    }
?>