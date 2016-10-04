#!/usr/bin/php
<?php

if ($argc != 2)
{
	echo "Incorrect Parameters\n";
	exit;
}

function	checkargs($tab)
{
	if (is_numeric($tab[0]) && is_numeric($tab[1]))
		return 1;
	return 0;
}

$argv[1]=str_replace(' ','',$argv[1]);
if (strpos($argv[1], "+") != NULL)
{
	$tab = explode("+", $argv[1]);
	if (checkargs($tab))
		echo $tab[0] + $tab[1]."\n";
	else
		echo "Syntax Error\n";
}
else if (strpos($argv[1], "-") != NULL)
{
	$tab = explode("-", $argv[1]);
	if (checkargs($tab))
		echo $tab[0] - $tab[1]."\n";
	else
		echo "Syntax Error\n";
}
else if (strpos($argv[1], "*") != NULL)
{
	$tab = explode("*", $argv[1]);
	if (checkargs($tab))
		echo $tab[0] * $tab[1]."\n";
	else
		echo "Syntax Error\n";
}
else if (strpos($argv[1], "/") != NULL)
{
	$tab = explode("/", $argv[1]);
	if (checkargs($tab))
		echo $tab[0] / $tab[1]."\n";
	else
		echo "Syntax Error\n";
}
else if (strpos($argv[1], "%") != NULL)
{
	$tab = explode("%", $argv[1]);
	if (checkargs($tab))
		echo $tab[0] % $tab[1]."\n";
	else
		echo "Syntax Error\n";
}
else
	echo "Syntax Error\n";