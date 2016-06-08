<?php
/*
When the user click on the alert box, it only contain Static information.

*** Parameters Required ***
	NOTHING
***
*/


$AlertData = array( 
    ['IdMonitorBlock'=> 1,
     'IdMonitorPoint'=> 2,
     'IdNotification'=>15,
     'AlertType'=> 0,
     'Message'=> "En Planta de Tratamiento de Agua/PM-101, Cloro Residual"
     ],
    ['IdMonitorBlock'=> 1,
     'IdMonitorPoint'=> 3,
     'IdNotification'=>16,
     'AlertType'=> 1,
     'Message'=> "En Planta de Tratamiento de Agua/PM-103, Cloro Residual"
     ],
    ['IdMonitorBlock'=> 2,
     'IdMonitorPoint'=> 46,
     'IdNotification'=>17,
     'AlertType'=> 0,
     'Message'=> "En Planta de Tratamiento de Agua/PM-101, Cloro Residual"
     ],
    ['IdMonitorBlock'=> 2,
     'IdMonitorPoint'=> 47,
     'IdNotification'=>18,
     'AlertType'=> 1,
     'Message'=> "En Planta de Tratamiento de Agua/PM-101, Cloro Residual"
     ],
    ['IdMonitorBlock'=> 3,
     'IdMonitorPoint'=> 58,
     'IdNotification'=>19,
     'AlertType'=> 1,
     'Message'=> "En Planta de Tratamiento de Agua/PM-103, Cloro Residual"
     ],
    ['IdMonitorBlock'=> 3,
     'IdMonitorPoint'=> 60,
     'IdNotification'=>20,
     'AlertType'=> 0,
     'Message'=> "En Planta de Tratamiento de Agua/PM-102, Cloro Residual"
     ],
    ['IdMonitorBlock'=> 4,
     'IdMonitorPoint'=> 12,
     'IdNotification'=>21,
     'AlertType'=> 0,
     'Message'=> "En Planta de Tratamiento de Agua/PM-102, Cloro Residual"
     ],
     
);

echo json_encode($AlertData);
?>