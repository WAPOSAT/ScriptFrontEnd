<?php
/*
Static Info to Load Screen 1

*** PARAMETERS REQUIRED: ***
	Date1: Date of the begin of monitoring 
	Date2: Date of the finish of monitoring
****************************    
*/

$StaticInfo = array(
    'ProcessBlock'=> [
        ['Id'=>1,
         'Name' => 'Planta de Purificacion de Agua',
         'CodeName'=> 'Bloque-101',
         'StationBlock'=> [
            ['Id'=>1,
             'Name' => 'Sistema de Agua Cruda',
             'CodeName' => 'PM-101',
             'Sensor'=>[
                ['Id'=>1,
                 'Name' => 'Cloro Residual',
                 'Title' => 'mg/L vs Tiempo',
                 'Data' => [140, 153, 139],
                 'Time' => ['Ene','Feb','Mar'],
                 'MaxValue' => 19.8,
                 'MeanValue' => 19.6,
                 'MinValue' => 19.3,
                 'Tendencia' => 3.4],
                ['Id'=>2,
                 'Name' => 'pH',
                 'Title' => 'pH vs Tiempo',
                 'Data' => [120, 121, 125],
                 'Time' => ['Ene','Feb','Mar'],
                 'MaxValue' => 125,
                 'MeanValue' => 120,
                 'MinValue' => 119,
                 'Tendencia' => 0.9],
                ['Id'=>3,
                 'Name' => 'Turbiedad',
                 'Title' => 'NTU vs Tiempo',
                 'Data' => [5.0, 5.2, 5.0],
                 'Time' => ['Ene','Feb','Mar'],
                 'MaxValue' => 6,
                 'MeanValue' => 5.5,
                 'MinValue' => 5.4,
                 'Tendencia' => 10.5]
             ]
            ],
            ['Id'=>2,
             'Name' => 'Tanque Reactor',
             'CodeName' => 'PM-102',
             'Sensor'=>[
                ['Id'=>4,
                 'Name' => 'Cloro Residual',
                 'Title' => 'mg/L vs Tiempo',
                 'Data' => [140, 153, 139],
                 'Time' => ['Ene','Feb','Mar'],
                 'MaxValue' => 19.8,
                 'MeanValue' => 19.6,
                 'MinValue' => 19.3,
                 'Tendencia' => 3.4],
                ['Id'=>5,
                 'Name' => 'pH',
                 'Title' => 'pH vs Tiempo',
                 'Data' => [120, 121, 125],
                 'Time' => ['Ene','Feb','Mar'],
                 'MaxValue' => 125,
                 'MeanValue' => 120,
                 'MinValue' => 119,
                 'Tendencia' => 0.9]
             ]
            ]
         ]
        ],
        ['Id'=>2,
         'Name' => 'Tanque XYZ',
         'CodeName'=> 'Bloque-102',
         'StationBlock'=>[
            ['Id'=>3,
             'Name' => 'Sistema de Ingreso de Agua',
             'CodeName' => 'PM-201',
             'Sensor'=>[
                ['Id'=>6,
                 'Name' => 'Temperatura',
                 'Title' => '°C vs Tiempo',
                 'Data' => [25, 24.6, 23.6],
                 'Time' => ['Ene','Feb','Mar'],
                 'MaxValue' => 25.4,
                 'MeanValue' => 24.3,
                 'MinValue' => 24.1,
                 'Tendencia' => 6.1],
                ['Id'=>7,
                 'Name' => 'Disolución de Oxígeno',
                 'Title' => 'mg/L vs Tiempo',
                 'Data' => [4.5, 3.1, 2.0],
                 'Time' => ['Ene','Feb','Mar'],
                 'MaxValue' => 5.2,
                 'MeanValue' => 3.3,
                 'MinValue' => 1.6,
                 'Tendencia' => -45.3],
                ['Id'=>8,
                 'Name' => 'Potencial Oxido Reducion',
                 'Title' => 'mV vs Tiempo',
                 'Data' => [1300, 1452, 1325],
                 'Time' => ['Ene','Feb','Mar'],
                 'MaxValue' => 1503,
                 'MeanValue' => 1398,
                 'MinValue' => 1253,
                 'Tendencia' => 0.45]
             ]
            ],
            ['Id'=>4,
             'Name' => 'Sistema de Salida de Agua',
             'CodeName' => 'PM-102',
             'Sensor'=> [
                ['Id'=>9,
                 'Name' => 'Cloro Residual',
                 'Title' => 'mg/L vs Tiempo',
                 'Data' => [140, 153, 139],
                 'Time' => ['Ene','Feb','Mar'],
                 'MaxValue' => 19.8,
                 'MeanValue' => 19.6,
                 'MinValue' => 19.3,
                 'Tendencia' => 3.4],
                ['Id'=>10,
                 'Name' => 'Disolución de Oxígeno',
                 'Title' => 'mg/L vs Tiempo',
                 'Data' => [4.45, 3.4, 2.1],
                 'Time' => ['Ene','Feb','Mar'],
                 'MaxValue' => 5.2,
                 'MeanValue' => 3.5,
                 'MinValue' => 1.9,
                 'Tendencia' => -23.3],
                ['Id'=>11,
                 'Name' => 'Turbiedad',
                 'Title' => 'NTU vs Tiempo',
                 'Data' => [5.0, 5.2, 5.0],
                 'Time' => ['Ene','Feb','Mar'],
                 'MaxValue' => 6,
                 'MeanValue' => 5.5,
                 'MinValue' => 5.4,
                 'Tendencia' => 10.5],
                ['Id'=>12,
                 'Name' => 'Conductividad',
                 'Title' => 'uS/cm vs Tiempo',
                 'Data' => [35, 32.4, 34.2],
                 'Time' => ['Ene','Feb','Mar'],
                 'MaxValue' => 36,
                 'MeanValue' => 35.2,
                 'MinValue' => 33.1,
                 'Tendencia' => 2.6]
             ]
            ]
         ]
        ]
    ]

);

echo json_encode($StaticInfo);
?>
