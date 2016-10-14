<?php
	$file = fopen("list.csv", "r");
	while ($t = fgetcsv($file,99999,";"))
	{
		$tab[$t[0]] = $t[1];
	}
	fclose($file);
	$file = fopen("list.csv", "w");
    foreach ($tab as $key => $value) {
    	if ($key != $_POST["data"])
    		fputcsv($file, array($key, $value), ";");
    	if (count($tab) == 1 && $key != $_POST["data"])
    		fwrite($file, "");
    }
    fclose($file);
 ?>