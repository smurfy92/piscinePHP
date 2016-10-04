#!/usr/bin/php
<?php
unset($argv[0]);
$string = implode(" ",$argv);
$tab = explode(" ", $string);
sort($tab);
$i = -1;
while ($tab[++$i])
	echo $tab[$i]."\n";