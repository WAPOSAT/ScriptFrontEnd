<?php
/*
Every time when the block reload information will get this Object, it only contain Dynamic information.

Parameters required:
    $MonitorBlock.Id = Identification number of the MonitorBlock
    
*/

$MonitorBlock = array(
    'Id' => 1,
    'RefreshFrequencySeg' => 3,
    // Information about the MonitorPoints on the MonitorBlock
    'MonitorPoint' => [
        ['Id'=> 1,
         'Parameter'=>[ 
            ['Id'=> 1,
             'LastValue' => 7.3
            ],
            ['Id'=> 2,
             'LastValue' => 21.45
            ],
            ['Id'=> 3,
             'LastValue' => 3.2
            ],
            ['Id'=> 4,
             'LastValue' => 2.5
            ],
            ['Id'=> 5,
             'LastValue' => 5
            ]
            ]
        ],
        ['Id'=> 2,
         'Parameter'=> [
            ['Id'=> 1,
             'LastValue' => 7.1
            ],
            ['Id'=> 2,
             'LastValue' => 23.44
            ]
            ]
        ],
        ['Id'=> 3,
         'Parameter'=> [
            ['Id'=> 1,
             'LastValue' => 7.1
            ],
            ['Id'=> 2,
             'LastValue' => 23.44
            ]
            ]
        ],
        ['Id'=> 4,
         'Parameter'=> [
            ['Id'=> 1,
             'LastValue' => 6.89
            ],
            ['Id'=> 3,
             'LastValue' => 4.5
            ],
            ['Id'=> 4,
             'LastValue' => 0.4
            ],
            ['Id'=> 5,
             'LastValue' => 3.1
            ]
            ]
        ],
        ['Id'=> 5,
         'Parameter'=> [
            ['Id'=> 1,
             'LastValue' => 7.45
            ]
            ]
        ],
        ['Id'=> 6,
         'Parameter' => [ 
            ['Id'=> 1,
             'LastValue' => 5.4
            ],
            ['Id'=> 2,
             'LastValue' => 23.5
            ],
            ['Id'=> 3,
             'LastValue' => 2.1
            ],
            ['Id'=> 5,
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