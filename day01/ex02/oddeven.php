#!/usr/bin/php
<?php
$handle = fopen("php://stdin","r");
while (!feof($handle))
{
	echo "Entrez un nombre: ";
	$line = fgets($handle);
	$line = rtrim($line);
	if (is_numeric($line))
	{
		if ($line % 2 == 0)
			echo "Le chiffre ".$line." est Pair\n";
		else
			echo "Le chiffre ".$line." est Impair\n";
	}
	else
	{
		if (!feof($handle))
			echo "'".$line."' n'est pas un chiffre\n";
		else
			echo "^D\n";
	}
}