<?php
	$file = fopen("list.csv", "r");
	while ($t = fgetcsv($file,99999,";"))
	{
		$tab[] = $t[1];
	}
	echo json_encode($tab);
	fclose($file);
 ?>