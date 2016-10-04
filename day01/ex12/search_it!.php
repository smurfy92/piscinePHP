#!/usr/bin/php
<?php

$to_search = $argv[1];
$i = 1;
$reponse = NULL;
while ($argv[++$i])
{
	$tab = explode(":", $argv[$i]);
	if (strcmp($to_search, $tab[0]) == 0)
		$reponse = $tab[1];
}
echo $reponse."\n";