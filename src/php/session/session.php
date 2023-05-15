<?php
	if(session_status() != 2){
		session_start();
	}
	$verif = true;
	$fp = fopen('./session/session.csv','r');
	while( ($linha = fgetcsv($fp)) !== false){
		if($linha[2] == $_SESSION['username']){
			$verif = false;
		}
	}
	if($verif){
		$file = fopen('./session/session.csv','a');
		$save = $_SESSION['username'];
		setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
		date_default_timezone_set('America/Recife');
		$data = date('d/m/Y');
		$hora = date('H:i:s');
		fputcsv($file,array($save,$data,$hora));
		fclose($file);
	}
?>
