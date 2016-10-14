<?php
if ($_POST["data"])
{
	$file = fopen("list.csv", "r");
	$tab = [];
	$key = 0;
	while ($t = fgetcsv($file,99999,";"))
	{
		$tab[] = $t[1];
	}
	fclose($file);
    $file = fopen("list.csv", "w");
    $tab[] = $_POST["data"];
    echo count($tab) - 1;
    foreach ($tab as $key => $value) {
    	fputcsv($file, array($key, $value), ";");
    }
    fclose($file);

}
else
	echo "non";
 ?>