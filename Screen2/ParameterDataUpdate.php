<?php
/*
Every time when the parameter reload information will get this Object, it only contain Dynamic information.

*** PARAMETERS REQUIRED: ***
    $MonitorPoint.Id = Identification number of the MonitorPoint
    $Parameter.Id = Identification number of the MonitorPoint
    $lastID = Identification number of the last MeasureDetail to this parameter on the Monitor Point
*/

$ParameterData = array(
    'Id'=> 3,
    'IdMonitorPoint' => 1,
    'Long' => 2,
    'RefreshFrequencySeg' => 3,
    'Last' => [
        'Id' => 423,
        'Value' => 6.9,
        'Date' => '2016-05-05 18:02:25',
        ],
    // Is possible that in a new reload would be more than one new measurement, so it’s necessary to receive all the new measurements
    'Data' => [
        'Time' => ['12:30', '12:31'],
        'Value' => [7.1, 7.2]
        ]
);

echo json_encode($ParameterData);
?>