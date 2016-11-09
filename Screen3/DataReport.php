<?php
/*
Static Info to Load Screen 1

*** PARAMETERS REQUIRED: ***
	Date1: Date of the begin of monitoring 
	Date2: Date of the finish of monitoring
****************************    
*/

$StaticInfo = array(
    'id' => 3,
    'NumProcessBlocks' => 2,
    'ProcessBlock'=> [
        ['id'=>1,
         'Name' => 'Planta de Purificacion de Agua',
         'CodeName'=> 'Bloque-101',
         'StationBlock'=> [
            ['id'=>1,
             'Name' => 'Sistema de Agua Cruda',
             'CodeName' => 'PM-101',
             'Sensor'=>[
                ['id'=>1,
                 'Name' => 'Cloro Residual',
                 'Unit' => 'mg/L',
                 'Data' => [
                    Time => ["2016-09-14 09:47:00", "2016-09-14 09:43:32", "2016-09-14 09:43:42", "2016-09-14 09:43:52", "2016-09-14 09:44:03", "2016-09-14 09:44:07", "2016-09-14 09:44:16", "2016-09-14 09:44:29", "2016-09-14 09:44:37", "2016-09-14 09:45:05", "2016-09-14 09:45:34", "2016-09-14 09:45:43", "2016-09-14 09:45:53", "2016-09-14 09:46:01", "2016-09-14 09:46:17", "2016-09-14 09:46:27", "2016-09-14 09:46:54", "2016-09-14 09:47:00"],
                    Value => [ 85, 87, 89, 85, 87, 87, 87, 84, 83, 89, 89, 88, 83, 85, 73, 89, 89, 89]
                 ],
                 'MaxValue' => 19.8,
                 'MeanValue' => 19.6,
                 'MinValue' => 19.3,
                 'Tendencia' => 3.4],
                ['id'=>2,
                 'Name' => 'pH',
                 'Unit' => 'mg/L',
                 'Data' => [
                    Time => ["2016-09-14 09:10:21", "2016-09-14 09:10:58", "2016-09-14 09:11:56", "2016-09-14 09:12:10", "2016-09-14 09:12:20", "2016-09-14 09:12:32", "2016-09-14 09:13:29", "2016-09-14 09:13:41", "2016-09-14 09:13:55", "2016-09-14 09:14:02", "2016-09-14 09:14:25", "2016-09-14 09:18:42", "2016-09-14 09:28:29", "2016-09-14 09:28:34", "2016-09-14 09:28:39", "2016-09-14 09:29:10", "2016-09-14 09:29:41", "2016-09-14 09:31:39", "2016-09-14 09:31:47", "2016-09-14 09:31:54", "2016-09-14 09:32:14", "2016-09-14 09:43:14", "2016-09-14 09:43:18", "2016-09-14 09:43:22", "2016-09-14 09:43:32", "2016-09-14 09:43:42", "2016-09-14 09:43:52", "2016-09-14 09:44:03", "2016-09-14 09:44:07", "2016-09-14 09:44:16", "2016-09-14 09:44:29", "2016-09-14 09:44:37", "2016-09-14 09:45:05", "2016-09-14 09:45:34", "2016-09-14 09:45:43", "2016-09-14 09:45:53", "2016-09-14 09:46:01", "2016-09-14 09:46:17", "2016-09-14 09:46:27", "2016-09-14 09:46:54", "2016-09-14 09:47:00"],
                    Value => [ 7, 45, 46, 50, 75, 65, 53, 78, 81, 82, 89, 94, 95, 93, 96, 96, 101, 55, 63, 75, 79, 85, 85, 85, 87, 89, 85, 87, 87, 87, 84, 83, 89, 89, 88, 83, 85, 73, 89, 89, 89]
                 ],
                 'MaxValue' => 125,
                 'MeanValue' => 120,
                 'MinValue' => 119,
                 'Tendencia' => 0.9],
                ['id'=>3,
                 'Name' => 'Turbiedad',
                 'Unit' => 'mg/L',
                 'Data' => [
                    Time => ["2016-09-14 09:47:00", "2016-09-14 09:43:32", "2016-09-14 09:43:42", "2016-09-14 09:43:52", "2016-09-14 09:44:03", "2016-09-14 09:44:07", "2016-09-14 09:44:16", "2016-09-14 09:44:29", "2016-09-14 09:44:37", "2016-09-14 09:45:05", "2016-09-14 09:45:34", "2016-09-14 09:45:43", "2016-09-14 09:45:53", "2016-09-14 09:46:01", "2016-09-14 09:46:17", "2016-09-14 09:46:27", "2016-09-14 09:46:54", "2016-09-14 09:47:00"],
                    Value => [ 85, 87, 89, 85, 87, 87, 87, 84, 83, 89, 89, 88, 83, 85, 73, 89, 89, 89]
                 ],
                 'MaxValue' => 6,
                 'MeanValue' => 5.5,
                 'MinValue' => 5.4,
                 'Tendencia' => 10.5]
             ]
            ],
            ['id'=>2,
             'Name' => 'Tanque Reactor',
             'CodeName' => 'PM-102',
             'Sensor'=>[
                ['id'=>4,
                 'Name' => 'Cloro Residual',
                 'Unit' => 'mg/L',
                 'Data' => [
                    Time => ["2016-09-14 09:10:21", "2016-09-14 09:10:58", "2016-09-14 09:11:56", "2016-09-14 09:12:10", "2016-09-14 09:12:20", "2016-09-14 09:12:32", "2016-09-14 09:13:29", "2016-09-14 09:13:41", "2016-09-14 09:13:55", "2016-09-14 09:14:02", "2016-09-14 09:14:25", "2016-09-14 09:18:42", "2016-09-14 09:28:29", "2016-09-14 09:28:34", "2016-09-14 09:28:39", "2016-09-14 09:29:10", "2016-09-14 09:29:41", "2016-09-14 09:31:39", "2016-09-14 09:31:47", "2016-09-14 09:31:54", "2016-09-14 09:32:14", "2016-09-14 09:43:14", "2016-09-14 09:43:18", "2016-09-14 09:43:22", "2016-09-14 09:43:32", "2016-09-14 09:43:42", "2016-09-14 09:43:52", "2016-09-14 09:44:03", "2016-09-14 09:44:07", "2016-09-14 09:44:16", "2016-09-14 09:44:29", "2016-09-14 09:44:37", "2016-09-14 09:45:05", "2016-09-14 09:45:34", "2016-09-14 09:45:43", "2016-09-14 09:45:53", "2016-09-14 09:46:01", "2016-09-14 09:46:17", "2016-09-14 09:46:27", "2016-09-14 09:46:54", "2016-09-14 09:47:00"],
                    Value => [ 7, 45, 46, 50, 75, 65, 53, 78, 81, 82, 89, 94, 95, 93, 96, 96, 101, 55, 63, 75, 79, 85, 85, 85, 87, 89, 85, 87, 87, 87, 84, 83, 89, 89, 88, 83, 85, 73, 89, 89, 89]
                 ],
                 'MaxValue' => 19.8,
                 'MeanValue' => 19.6,
                 'MinValue' => 19.3,
                 'Tendencia' => 3.4],
                ['id'=>5,
                 'Name' => 'pH',
                 'Unit' => 'mg/L',
                 'Data' => [
                    Time => ["2016-09-14 09:47:00", "2016-09-14 09:43:32", "2016-09-14 09:43:42", "2016-09-14 09:43:52", "2016-09-14 09:44:03", "2016-09-14 09:44:07", "2016-09-14 09:44:16", "2016-09-14 09:44:29", "2016-09-14 09:44:37", "2016-09-14 09:45:05", "2016-09-14 09:45:34", "2016-09-14 09:45:43", "2016-09-14 09:45:53", "2016-09-14 09:46:01", "2016-09-14 09:46:17", "2016-09-14 09:46:27", "2016-09-14 09:46:54", "2016-09-14 09:47:00"],
                    Value => [ 85, 87, 89, 85, 87, 87, 87, 84, 83, 89, 89, 88, 83, 85, 73, 89, 89, 89]
                 ],
                 'MaxValue' => 125,
                 'MeanValue' => 120,
                 'MinValue' => 119,
                 'Tendencia' => 0.9]
             ]
            ]
         ]
        ],
        ['id'=>2,
         'Name' => 'Tanque XYZ',
         'CodeName'=> 'Bloque-102',
         'StationBlock'=>[
            ['id'=>3,
             'Name' => 'Sistema de Ingreso de Agua',
             'CodeName' => 'PM-201',
             'Sensor'=>[
                ['id'=>6,
                 'Name' => 'Temperatura',
                 'Unit' => 'mg/L',
                 'Data' => [
                    Time => ["2016-09-14 09:10:21", "2016-09-14 09:10:58", "2016-09-14 09:11:56", "2016-09-14 09:12:10", "2016-09-14 09:12:20", "2016-09-14 09:12:32", "2016-09-14 09:13:29", "2016-09-14 09:13:41", "2016-09-14 09:13:55", "2016-09-14 09:14:02", "2016-09-14 09:14:25", "2016-09-14 09:18:42", "2016-09-14 09:28:29", "2016-09-14 09:28:34", "2016-09-14 09:28:39", "2016-09-14 09:29:10", "2016-09-14 09:29:41", "2016-09-14 09:31:39", "2016-09-14 09:31:47", "2016-09-14 09:31:54", "2016-09-14 09:32:14", "2016-09-14 09:43:14", "2016-09-14 09:43:18", "2016-09-14 09:43:22", "2016-09-14 09:43:32", "2016-09-14 09:43:42", "2016-09-14 09:43:52", "2016-09-14 09:44:03", "2016-09-14 09:44:07", "2016-09-14 09:44:16", "2016-09-14 09:44:29", "2016-09-14 09:44:37", "2016-09-14 09:45:05", "2016-09-14 09:45:34", "2016-09-14 09:45:43", "2016-09-14 09:45:53", "2016-09-14 09:46:01", "2016-09-14 09:46:17", "2016-09-14 09:46:27", "2016-09-14 09:46:54", "2016-09-14 09:47:00"],
                    Value => [ 7, 45, 46, 50, 75, 65, 53, 78, 81, 82, 89, 94, 95, 93, 96, 96, 101, 55, 63, 75, 79, 85, 85, 85, 87, 89, 85, 87, 87, 87, 84, 83, 89, 89, 88, 83, 85, 73, 89, 89, 89]
                 ],
                 'MaxValue' => 25.4,
                 'MeanValue' => 24.3,
                 'MinValue' => 24.1,
                 'Tendencia' => 6.1],
                ['id'=>7,
                 'Name' => 'Disolución de Oxígeno',
                 'Unit' => 'mg/L',
                 'Data' => [
                    Time => ["2016-09-14 09:10:21", "2016-09-14 09:10:58", "2016-09-14 09:11:56", "2016-09-14 09:12:10", "2016-09-14 09:12:20", "2016-09-14 09:12:32", "2016-09-14 09:13:29", "2016-09-14 09:13:41", "2016-09-14 09:13:55", "2016-09-14 09:14:02", "2016-09-14 09:14:25", "2016-09-14 09:18:42", "2016-09-14 09:28:29", "2016-09-14 09:28:34", "2016-09-14 09:28:39", "2016-09-14 09:29:10", "2016-09-14 09:29:41", "2016-09-14 09:31:39", "2016-09-14 09:31:47", "2016-09-14 09:31:54", "2016-09-14 09:32:14", "2016-09-14 09:43:14", "2016-09-14 09:43:18", "2016-09-14 09:43:22", "2016-09-14 09:43:32", "2016-09-14 09:43:42", "2016-09-14 09:43:52", "2016-09-14 09:44:03", "2016-09-14 09:44:07", "2016-09-14 09:44:16", "2016-09-14 09:44:29", "2016-09-14 09:44:37", "2016-09-14 09:45:05", "2016-09-14 09:45:34", "2016-09-14 09:45:43", "2016-09-14 09:45:53", "2016-09-14 09:46:01", "2016-09-14 09:46:17", "2016-09-14 09:46:27", "2016-09-14 09:46:54", "2016-09-14 09:47:00"],
                    Value => [ 7, 45, 46, 50, 75, 65, 53, 78, 81, 82, 89, 94, 95, 93, 96, 96, 101, 55, 63, 75, 79, 85, 85, 85, 87, 89, 85, 87, 87, 87, 84, 83, 89, 89, 88, 83, 85, 73, 89, 89, 89]
                 ],
                 'MaxValue' => 5.2,
                 'MeanValue' => 3.3,
                 'MinValue' => 1.6,
                 'Tendencia' => -45.3],
                ['id'=>8,
                 'Name' => 'Potencial Oxido Reducion',
                 'Unit' => 'mg/L',
                 'Data' => [
                    Time => ["2016-09-14 09:47:00", "2016-09-14 09:43:32", "2016-09-14 09:43:42", "2016-09-14 09:43:52", "2016-09-14 09:44:03", "2016-09-14 09:44:07", "2016-09-14 09:44:16", "2016-09-14 09:44:29", "2016-09-14 09:44:37", "2016-09-14 09:45:05", "2016-09-14 09:45:34", "2016-09-14 09:45:43", "2016-09-14 09:45:53", "2016-09-14 09:46:01", "2016-09-14 09:46:17", "2016-09-14 09:46:27", "2016-09-14 09:46:54", "2016-09-14 09:47:00"],
                    Value => [ 85, 87, 89, 85, 87, 87, 87, 84, 83, 89, 89, 88, 83, 85, 73, 89, 89, 89]
                 ],
                 'MaxValue' => 1503,
                 'MeanValue' => 1398,
                 'MinValue' => 1253,
                 'Tendencia' => 0.45]
             ]
            ],
            ['id'=>4,
             'Name' => 'Sistema de Salida de Agua',
             'CodeName' => 'PM-102',
             'Sensor'=> [
                ['id'=>9,
                 'Name' => 'Cloro Residual',
                 'Unit' => 'mg/L',
                 'Data' => [
                    Time => ["2016-09-14 09:10:21", "2016-09-14 09:10:58", "2016-09-14 09:11:56", "2016-09-14 09:12:10", "2016-09-14 09:12:20", "2016-09-14 09:12:32", "2016-09-14 09:13:29", "2016-09-14 09:13:41", "2016-09-14 09:13:55", "2016-09-14 09:14:02", "2016-09-14 09:14:25", "2016-09-14 09:18:42", "2016-09-14 09:28:29", "2016-09-14 09:28:34", "2016-09-14 09:28:39", "2016-09-14 09:29:10", "2016-09-14 09:29:41", "2016-09-14 09:31:39", "2016-09-14 09:31:47", "2016-09-14 09:31:54", "2016-09-14 09:32:14", "2016-09-14 09:43:14", "2016-09-14 09:43:18", "2016-09-14 09:43:22", "2016-09-14 09:43:32", "2016-09-14 09:43:42", "2016-09-14 09:43:52", "2016-09-14 09:44:03", "2016-09-14 09:44:07", "2016-09-14 09:44:16", "2016-09-14 09:44:29", "2016-09-14 09:44:37", "2016-09-14 09:45:05", "2016-09-14 09:45:34", "2016-09-14 09:45:43", "2016-09-14 09:45:53", "2016-09-14 09:46:01", "2016-09-14 09:46:17", "2016-09-14 09:46:27", "2016-09-14 09:46:54", "2016-09-14 09:47:00"],
                    Value => [ 7, 45, 46, 50, 75, 65, 53, 78, 81, 82, 89, 94, 95, 93, 96, 96, 101, 55, 63, 75, 79, 85, 85, 85, 87, 89, 85, 87, 87, 87, 84, 83, 89, 89, 88, 83, 85, 73, 89, 89, 89]
                 ],
                 'MaxValue' => 19.8,
                 'MeanValue' => 19.6,
                 'MinValue' => 19.3,
                 'Tendencia' => 3.4],
                ['id'=>10,
                 'Name' => 'Disolución de Oxígeno',
                 'Unit' => 'mg/L',
                 'Data' => [
                    Time => ["2016-09-14 09:10:21", "2016-09-14 09:10:58", "2016-09-14 09:11:56", "2016-09-14 09:12:10", "2016-09-14 09:12:20", "2016-09-14 09:12:32", "2016-09-14 09:13:29", "2016-09-14 09:13:41", "2016-09-14 09:13:55", "2016-09-14 09:14:02", "2016-09-14 09:14:25", "2016-09-14 09:18:42", "2016-09-14 09:28:29", "2016-09-14 09:28:34", "2016-09-14 09:28:39", "2016-09-14 09:29:10", "2016-09-14 09:29:41", "2016-09-14 09:31:39", "2016-09-14 09:31:47", "2016-09-14 09:31:54", "2016-09-14 09:32:14", "2016-09-14 09:43:14", "2016-09-14 09:43:18", "2016-09-14 09:43:22", "2016-09-14 09:43:32", "2016-09-14 09:43:42", "2016-09-14 09:43:52", "2016-09-14 09:44:03", "2016-09-14 09:44:07", "2016-09-14 09:44:16", "2016-09-14 09:44:29", "2016-09-14 09:44:37", "2016-09-14 09:45:05", "2016-09-14 09:45:34", "2016-09-14 09:45:43", "2016-09-14 09:45:53", "2016-09-14 09:46:01", "2016-09-14 09:46:17", "2016-09-14 09:46:27", "2016-09-14 09:46:54", "2016-09-14 09:47:00"],
                    Value => [ 7, 45, 46, 50, 75, 65, 53, 78, 81, 82, 89, 94, 95, 93, 96, 96, 101, 55, 63, 75, 79, 85, 85, 85, 87, 89, 85, 87, 87, 87, 84, 83, 89, 89, 88, 83, 85, 73, 89, 89, 89]
                 ],
                 'MaxValue' => 5.2,
                 'MeanValue' => 3.5,
                 'MinValue' => 1.9,
                 'Tendencia' => -23.3],
                ['id'=>11,
                 'Name' => 'Turbiedad',
                 'Unit' => 'mg/L',
                 'Data' => [
                    Time => [],
                    Value => []
                 ],
                 'MaxValue' => 6,
                 'MeanValue' => 5.5,
                 'MinValue' => 5.4,
                 'Tendencia' => 10.5],
                ['id'=>12,
                 'Name' => 'Conductividad',
                 'Unit' => 'mg/L',
                 'Data' => [
                    Time => ["2016-09-14 09:10:21", "2016-09-14 09:10:58", "2016-09-14 09:11:56", "2016-09-14 09:12:10", "2016-09-14 09:12:20", "2016-09-14 09:12:32", "2016-09-14 09:13:29", "2016-09-14 09:13:41", "2016-09-14 09:13:55", "2016-09-14 09:14:02", "2016-09-14 09:14:25", "2016-09-14 09:18:42", "2016-09-14 09:28:29", "2016-09-14 09:28:34", "2016-09-14 09:28:39", "2016-09-14 09:29:10", "2016-09-14 09:29:41", "2016-09-14 09:31:39", "2016-09-14 09:31:47", "2016-09-14 09:31:54", "2016-09-14 09:32:14", "2016-09-14 09:43:14", "2016-09-14 09:43:18", "2016-09-14 09:43:22", "2016-09-14 09:43:32", "2016-09-14 09:43:42", "2016-09-14 09:43:52", "2016-09-14 09:44:03", "2016-09-14 09:44:07", "2016-09-14 09:44:16", "2016-09-14 09:44:29", "2016-09-14 09:44:37", "2016-09-14 09:45:05", "2016-09-14 09:45:34", "2016-09-14 09:45:43", "2016-09-14 09:45:53", "2016-09-14 09:46:01", "2016-09-14 09:46:17", "2016-09-14 09:46:27", "2016-09-14 09:46:54", "2016-09-14 09:47:00"],
                    Value => [ 7, 45, 46, 50, 75, 65, 53, 78, 81, 82, 89, 94, 95, 93, 96, 96, 101, 55, 63, 75, 79, 85, 85, 85, 87, 89, 85, 87, 87, 87, 84, 83, 89, 89, 88, 83, 85, 73, 89, 89, 89]
                 ],
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
