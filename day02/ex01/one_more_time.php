#!/usr/bin/php
<?php

date_default_timezone_set('Europe/Paris');

$days = array(
	0 => "lundi",
	1 => "mardi",
	2 => "mercredi",
	3 => "jeudi",
	4 => "vendredi",
	5 => "samedi",
	6 => "dimanche",
	);
$months = array(
	"01" => "janvier",
	"02" => "fevrier",
	"03" => "mars",
	"04" => "avril",
	"05" => "mai",
	"06" => "juin",
	"07" => "juillet",
	"08" => "aout",
	"09" => "septembre",
	"10" => "octobre",
	"11" => "novembre",
	"12" => "decembre",
	);
	if ($argc < 2)
		exit;
	$date = explode(" ", $argv[1]);
	if (count($date) != 5 ||
	!in_array(strtolower($date[0]), $days) ||
	!in_array(strtolower($date[2]), $months) ||
	!preg_match("/^[0-9]{1,2}$/", $date[1]) ||
	!preg_match("/^[0-9]{4}$/", $date[3]) ||
	!preg_match("/^[0-9]{2}:[0-9]{2}:[0-9]{2}$/", $date[4]))
	{
		echo "Wrong Format\n";
		exit;
	}
	else
	{
		$nb = strtotime($date[1]."-".array_search(strtolower($date[2]),$months)."-".$date[3]);
		$tab = explode(":", $date[4]);
		$nb += $tab[2] + $tab[1] * 60 + $tab[0] * 3600;
		echo "$nb\n";
	}
