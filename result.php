<?php
	require '.\processing.php';
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$date = $_POST["ageDate"];
		$checkDate = new DateTime($date);
		$currentDate = new DateTime();
		
		if($date == NULL)
		{
			$resultado = "<div class=\"error\">
								<p>Entre corretamente com a data de nascimento</p>. 
							</div>";
		}
		else if($checkDate->format("%Y") > $currentDate->format("%Y")
			|| ($checkDate->format("%Y") == $currentDate->format("%Y") && $checkDate->format("%m") > $currentDate->format("%m"))
			|| ($checkDate->format("%Y") == $currentDate->format("%Y") && $checkDate->format("%m") == $currentDate->format("%m") && $checkDate->format("%d") >$currentDate->format("%d")))
		{
			$resultado = "<div class=\"error\">
								<p>Essa pessoa ainda não nasceu.</p>. 
							</div>";
		}
		else
		{
			$resultado = "<div class=\"result\">".
								calcTimeLived($date)."
							</div>";		
		}
			include '.\index.php';
	}
	
?>