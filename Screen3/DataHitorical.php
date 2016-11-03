<?php
/*
Static Info to Load Screen 1

*** PARAMETERS REQUIRED =>  ***
    Date1 =>  Date of the begin of monitoring 
    Date2 =>  Date of the finish of monitoring
****************************    
*/

$StaticInfo = array(
    'LongDanger' => 2,
    'LongRisk'=> 4,
    'Danger' => [
        ['id' => 10439,
         'idProcessBlock' => 5,
         'ProcessBlock' => 'p1',
         'idStationBlock' => 1,
         'StationBlock' => 'st1',
         'idSensor' => 1,
         'Sensor' => 's1',
         'Message' => 'Sobrepaso limite',
         'Date' => 'Sep-14 09:29:41'],
        ['id' => 10441,
         'idProcessBlock' => 5,
         'ProcessBlock' => 'p1',
         'idStationBlock' => 4,
         'StationBlock' => 'st3',
         'idSensor' => 1,
         'Sensor' => 's1',
         'Message' => 'Sobrepaso limite',
         'Date' => 'Sep-14 09:29:41']
    ],
    'Risk' => [
        ['id' => 10433,
         'idProcessBlock' => 5,
         'ProcessBlock' => 'p1',
         'idStationBlock' => 1,
         'StationBlock' => 'st1',
         'idSensor' => 1,
         'Sensor' => 's1',
         'Message' => 'Cercano al limite',
         'Date' => 'Sep-14 09:28:39'],
        ['id' => 10435,
         'idProcessBlock' => 5,
         'ProcessBlock' => 'p1',
         'idStationBlock' => 4,
         'StationBlock' => 'st3',
         'idSensor' => 1,
         'Sensor' => 's1',
         'Message' => 'Cercano al limite',
         'Date' => 'Sep-14 09:28:39'],
        ['id' => 10436,
         'idProcessBlock' => 5,
         'ProcessBlock' => 'p1',
         'idStationBlock' => 1,
         'StationBlock' => 'st1',
         'idSensor' => 1,
         'Sensor' => 's1',
         'Message' => 'Cercano al limite',
         'Date' => 'Sep-14 09:29:10'],
        ['id' => 10438,
         'idProcessBlock' => 5,
         'ProcessBlock' => 'p1',
         'idStationBlock' => 4,
         'StationBlock' => 'st3',
         'idSensor' => 1,
         'Sensor' => 's1',
         'Message' => 'Cercano al limite',
         'Date' => 'Sep-14 09:29:10']
    ]
    
);

echo json_encode($StaticInfo);
?>
