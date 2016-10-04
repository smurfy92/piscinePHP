#!/usr/bin/php
<?php

unset($argv[0]);
$string = implode(" ",$argv);
$tab = explode(" ", $string);
$i = -1;
$alpha = [];
$num = [];
$rest = [];
while ($tab[++$i])
{
	if (!preg_match('/[^A-Za-z]/', $tab[$i][0]))
		array_push($alpha, $tab[$i]);
	else if (is_numeric($tab[$i])[0])
		array_push($num, $tab[$i]);
	else
		array_push($rest, $tab[$i]);
}
natcasesort($alpha);
sort($num, SORT_STRING);
sort($rest);
$tab = [];
$tab = array_merge($alpha, $num, $rest);
$i = -1;
while ($tab[++$i])
	echo $tab[$i],"\n";