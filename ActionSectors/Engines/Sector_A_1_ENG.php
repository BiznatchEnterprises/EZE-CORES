<?php
//+++++++++++++++++++++++++++++++++++++++++++
//  EZE-CORES STRUCTURE - Biznatch Enterprises
//  https://github.com/BiznatchEnterprises/EZE-CORES
//+++++++++++++++++++++++++++++++++++++++++++

//----- EZI-CORES ACTION Sector VARIABLE ENGINE START -----
if (isset($ACTION_CONTENT) == TRUE){
    $ACTION_OUTPUT = str_replace('##ACTION_CONTENT##', $ACTION_CONTENT, $ACTION_OUTPUT);
}
if (isset($EZECORES_FILENAME) == TRUE){
    $ACTION_OUTPUT = str_replace('##EZECORES_FILENAME##', $EZECORES_FILENAME, $ACTION_OUTPUT);
}
//----- EZI-CORES ACTION Sector VARIABLE ENGINE END -----

?>
