<?php 
	$fp = fopen('./session.csv','r');
	$backup = fopen("backup.csv",'w');

	while( ($row = fgetcsv($fp)) !== false){
		if($row[0] != $_SESSION['auth']){
			fputcsv($backup,$row);
		}
	}
	fclose($fp);
	fclose($backup);
	rename('./backup.csv','./session/session.csv');
?>