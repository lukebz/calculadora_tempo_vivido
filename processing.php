<?php

date_default_timezone_set("America/Sao_Paulo");

function calcTimeLived($date)
{
	$checkDate = new DateTime($date);
	$dateToCalc = "";

	if($checkDate->format("Y") < 1970)
	{
		$dateToCalc = time() + abs(strtotime($date));
	}
	else
	{
		$dateToCalc = time() - strtotime($date);
	}
	
	$year = $checkDate->diff(new DateTime());
	$year = $year->format('%Y');
	$mounth = $dateToCalc / 2629746;
	$week = $dateToCalc / 604800;
	$day = $dateToCalc / 86400;
	$hour = $dateToCalc / 3600;
	$minute = $dateToCalc / 60;
	$second = $dateToCalc;

	$date = $checkDate->format('d/m/Y');
	
	$result = "<span>Quem nasceu em $date, já viveu pelo menos:</span> <br>" .
				"<center>" . number_format((int)$year, 0, '.', '.')  . " anos<br>" .
				number_format((int)$mounth, 0, '.', '.') . " meses<br>" .
				number_format((int)$week, 0, '.', '.') . " semanas<br>" .
				number_format((int)$day, 0, '.', '.') . " dias<br>" .
				number_format((int)$hour, 0, '.', '.') . " horas<br>" .
				number_format((int)$minute, 0, '.', '.') . " minutos<br>" .
				number_format((int)$second, 0, '.', '.') . " segundos<br>";
	
	return $result;
}

?>
