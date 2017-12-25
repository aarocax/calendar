<?php

$year = $_POST['year'];
$month = $_POST['month'];

//var_dump($month);

$datos_2017 = array(
	'years'=>array(
		array(
			'int' => 2017,
			'months' => array(
				array(
					'int' => 12,
					'days' => array(
						array(
							'int' => 18,
							'events' => array(
								array(
									'startTime' => "6:00",
									'endTime' => "6:00",
									'mTime' => "pm",
									'text' => 'hola'
								),
								array(
									'startTime' => "18:00",
									'endTime' => "20:00",
									'mTime' => "pm",
									'text' => 'adios'
								),
							),
						),
						array(
							'int' => 20,
							'events' => array(
								array(
									'startTime' => "6:00",
									'endTime' => "6:00",
									'mTime' => "pm",
									'text' => 'Este es el evento del día 20 de Dic. 2017'
								),
							),
						),
						array(
							'int' => 25,
							'events' => array(
								array(
									'startTime' => "6:00",
									'endTime' => "6:00",
									'mTime' => "pm",
									'text' => 'navidad 2017'
								),
							),
						),
					),
				),
			),
		),
	)
);

$datos_2018 = array(
	'years'=>array(
		array(
			'int' => 2018,
			'months' => array(
				array(
					'int' => 1,
					'days' => array(
						array(
							'int' => 1,
							'events' => array(
								array(
									'startTime' => "6:00",
									'endTime' => "6:00",
									'mTime' => "pm",
									'text' => 'añonuevo'
								),
							),
						),
					),
				),
				array(
					'int' => 2,
					'days' => array(
						array(
							'int' => 28,
							'events' => array(
								array(
									'startTime' => "6:00",
									'endTime' => "6:00",
									'mTime' => "pm",
									'text' => '´ultimo día de febrero'
								),
							),
						),
					),
				),
				array(
					'int' => 3,
					'days' => array(
						array(
							'int' => 28,
							'events' => array(
								array(
									'startTime' => "6:00",
									'endTime' => "6:00",
									'mTime' => "pm",
									'text' => 'cumple anselmo'
								),
							),
						),
					),
				),
			),
		),
	)
);

$year_base = array(
	'years'=>array(
		array(
			'int' => (int)$year,
			'months' => array(),
		),
	)
);

$enero = array(
					'int' => 1,
					'days' => array(
						array(
							'int' => 1,
							'events' => array(
								array(
									'startTime' => "6:00",
									'endTime' => "6:00",
									'mTime' => "pm",
									'text' => 'añonuevo'
								),
							),
						),
						array(
							'int' => 5,
							'events' => array(
								array(
									'startTime' => "6:00",
									'endTime' => "6:00",
									'mTime' => "pm",
									'text' => 'reyes'
								),
							),
						),
					),
				);
			

switch ($year) {
	case '2018':
		if ($month == 1) {
			$datos = $datos_2018;
			$year_base['years'][0]['months'][0] = $enero;
			$datos = $year_base;
		} else {
			$datos = $datos_2018;	
		}
		
		
		break;
	
	case '2017':
		$datos = $datos_2017;
		break;
}



echo json_encode($datos);


