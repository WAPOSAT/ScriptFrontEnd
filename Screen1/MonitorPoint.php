<?php
/*
First load of information about specific MonitorPoint, it include Static and Dynamic information

Parameters required:
    $MonitorBlock.Id = Identification number of the MonitorBlock
    
*/

$MonitorPoint = array(
    'Id' => 1,
    'Name' => 'Sistema de Agua Cruda',
    'CodeName' => 'PM-101',
    'NumDanger'=> 2,
    'NumRisk'=> 2,
    'RefreshFrecuencySeg' => 3,
    // Information about the Parameters on the MonitorPoint
    'Parameter' => [ 
        ['Id'=> 1,
         'Name' => 'pH',
         'Code' => 'PH',
         'LMP' => 8.5,
         'LMR' => 7.5,
         'Unit' => '',
         'MinValue' => 7.1,
         'MaxValue' => 7.6,
         'LastValue' => 7.3
        ],
        ['Id'=> 2,
         'Name' => 'Temperatura',
         'Code' => 'TEMP',
         'LMP' => 27.5,
         'LMR' => 7.5,
         'Unit' => '',
         'MinValue' => 7.1,
         'MaxValue' => 7.6,
         'LastValue' => 21.45
        ],
        ['Id'=> 3,
         'Name' => 'Cloro Residual',
         'Code' => 'CR',
         'LMP' => 5,
         'LMR' => 7.5,
         'Unit' => '',
         'MinValue' => 7.1,
         'MaxValue' => 7.6,
         'LastValue' => 3.2
        ],
        ['Id'=> 4,
         'Name' => 'Oxigeno Disuelto',
         'Code' => 'OD',
         'LMP' => 4,
         'LMR' => 7.5,
         'Unit' => '',
         'MinValue' => 7.1,
         'MaxValue' => 7.6,
         'LastValue' => 2.5
        ],
        ['Id'=> 5,
         'Name' => 'Conductividad',
         'Code' => 'C',
         'LMP' => 5,
         'LMR' => 7.5,
         'Unit' => '',
         'MinValue' => 7.1,
         'MaxValue' => 7.6,
         'LastValue' => 5
        ]
    ]
    
);

echo json_encode($MonitorBlock);
?>