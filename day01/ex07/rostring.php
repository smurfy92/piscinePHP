#!/usr/bin/php
<?php
$tab = explode(" ", $argv[1]);
$tmp = $tab[0];
unset($tab[0]);
array_push($tab, $tmp);
$i = 0;
while ($tab[++$i])
	echo $tab[$i]." ";
echo "\n";