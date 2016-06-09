<?php
/*
First load of information about specific MonitorBlock, it include Static and Dynamic information

*** PARAMETERS REQUIRED: ***
    $MonitorBlock.Id = Identification number of the MonitorBlock
    
*/

$MonitorBlock = array(
    'Id' => 1,
    'Name' => 'Planta de Purificacion de Agua',
    'CodeName' => 'Bloque-101',
    'Hi' => 'Estas en la Planta de Purificacion de Agua - Bloque 101 -',
    'RefreshFrequencySeg' => 3,
    // Information about the MonitorPoints on the MonitorBlock
    'MonitorPoint' => [
        ['Id'=> 1,
         'Name' => 'Sistema de Agua Cruda',
         'CodeName' => 'PM-101',
         'URL'=>'/#'
         'Parameter'=>[ 
            ['Id'=> 1,
             'Name' => 'pH',
             'Code' => 'PH',
             'Unit' => '',  
             'LMP' => 8.5,
             'LMR' => 7.6,
             'LastValue' => 7.3
            ],
            ['Id'=> 2,
             'Name' => 'Temperatura',
             'Code' => 'TEMP',
             'Unit' => 'oC',
             'LMP' => 27.5,
             'LMR' => 25.5,
             'LastValue' => 21.45
            ],
            ['Id'=> 3,
             'Name' => 'Cloro Residual',
             'Code' => 'CR',
             'Unit' => 'ppm',
             'LMP' => 5,
             'LMR' => 4,
             'LastValue' => 3.2
            ],
            ['Id'=> 4,
             'Name' => 'Oxigeno Disuelto',
             'Code' => 'OD',
             'Unit' => 'mg/L',
             'LMP' => 4,
             'LMR' => 3,
             'LastValue' => 2.5
            ],
            ['Id'=> 5,
             'Name' => 'Conductividad',
             'Code' => 'C',
             'Unit' => 'uS',
             'LMP' => 5,
             'LMR' => 4,
             'LastValue' => 5
            ]
            ]
        ],
        ['Id'=> 2,
         'Name' => 'Tanque XYZ',
         'CodeName' => 'PM-102',
         'URL' => '/#'
         'Parameter'=> [
            ['Id'=> 1,
             'Name' => 'pH',
             'Code' => 'PH',
             'Unit' => '',
             'LMP' => 8.5,
             'LMR' => 8.3,
             'LastValue' => 7.1
            ],
            ['Id'=> 2,
             'Name' => 'Temperatura',
             'Code' => 'TEMP',
             'Unit' => 'oC',
             'LMP' => 27.5,
             'LMR' => 27.3,
             'LastValue' => 23.44
            ]
            ]
        ],
        ['Id'=> 3,
         'Name' => 'Tanque Reactor',
         'CodeName' => 'PM-103',
         'URL' => '/#'
         'Parameter'=> [
            ['Id'=> 1,
             'Name' => 'pH',
             'Code' => 'PH',
             'Unit' => '',
             'LMP' => 8.5,
             'LMR' => 8.3,
             'LastValue' => 7.1
            ],
            ['Id'=> 2,
             'Name' => 'Temperatura',
             'Code' => 'TEMP',
             'Unit' => 'oC',
             'LMP' => 27.5,
             'LMR' => 27.3,
             'LastValue' => 23.44
            ]
            ]
        ],
        ['Id'=> 4,
         'Name' => 'Filtro Arena',
         'CodeName' => 'PM-103',
         'URL' => '/#',
         'Parameter'=> [
            ['Id'=> 1,
             'Name' => 'pH',
             'Code' => 'PH',
             'Unit' => '',
             'LMP' => 8.5,
             'LMR' => 8.1,
             'LastValue' => 6.89
            ],
            ['Id'=> 3,
             'Name' => 'Cloro Residual',
             'Code' => 'CR',
             'Unit' => 'ppm',
             'LMP' => 5,
             'LMR' => 4.5,
             'LastValue' => 4.5
            ],
            ['Id'=> 4,
             'Name' => 'Oxigeno Disuelto',
             'Code' => 'OD',
             'Unit' => 'mg/L',
             'LMP' => 4,
             'LMR' => 3.6,
             'LastValue' => 0.4
            ],
            ['Id'=> 5,
             'Name' => 'Conductividad',
             'Code' => 'C',
             'Unit' => 'uS',
             'LMP' => 5,
             'LMR' => 4,
             'LastValue' => 3.1
            ]
            ]
        ],
        ['Id'=> 5,
         'Name' => 'Filtro de Carbon',
         'CodeName' => 'PM-103',
         'URL' => '/#',
         'Parameter'=> [
            ['Id'=> 1,
             'Name' => 'pH',
             'Code' => 'PH',
             'Unit' => '',
             'LMP' => 8.5,
             'LMR' => 8.3,
             'LastValue' => 7.45
            ]
            ]
        ],
        ['Id'=> 6,
         'Name' => 'Filtro Pulidor',
         'CodeName' => 'PM-105',
         'URL' => '/#',
         'Parameter' => [ 
            ['Id'=> 1,
             'Name' => 'pH',
             'Code' => 'PH',
             'Unit' => '',
             'LMP' => 8.5,
             'LMR' => 8.1,
             'LastValue' => 5.4
            ],
            ['Id'=> 2,
             'Name' => 'Temperatura',
             'Code' => 'TEMP',
             'LMP' => 27.5,
             'Unit' => 'oC',
             'LastValue' => 23.5
            ],
            ['Id'=> 3,
             'Name' => 'Cloro Residual',
             'Code' => 'CR',
             'Unit' => 'ppm',
             'LMP' => 5,
             'LMR' => 4.5,
             'LastValue' => 2.1
            ],
            ['Id'=> 5,
             'Name' => 'Conductividad',
             'Code' => 'C',
             'Unit' => 'uS',
             'LMP' => 5,
             'LMR' => 4.2,
             'LastValue' => 3.8
            ]
            ]
        ]
    ],
    'Danger' => [
        ['Id' => 4,
         'Name' => 'Sistema de Agua cruda',
         'CodeName' => 'PM-101',
         'ParameterName' => 'Temperatura',
         'IdParameter' => 5]
    ]
    
    'Risk' => [
        ['Id' => 5,
         'Name' => 'Tanque XYZ',
         'CodeName' => 'PM-102',
         'ParameterName' => 'Cloro Residual',
         'IdParameter' => 7],
        ['Id' => 5,
         'Name' => 'Tanque XYZ',
         'CodeName' => 'PM-102',
         'ParameterName' => 'Conductividad',
         'IdParameter' => 6]
    ]
        
);

echo json_encode($MonitorBlock);
?>