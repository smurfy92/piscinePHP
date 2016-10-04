#!/usr/bin/php
<?php

if ($argc != 4)
{
	echo "Incorrect Parameters\n";
	exit;
}
$argv[1] = rtrim($argv[1]);
$argv[2] = rtrim($argv[2]);
$argv[3] = rtrim($argv[3]);
$argv[1] = ltrim($argv[1]);
$argv[2] = ltrim($argv[2]);
$argv[3] = ltrim($argv[3]);
$i = 0;
if ($argv[2] == "+")
	echo $argv[1] + $argv[3]."\n";
else if ($argv[2] == "-")
	echo $argv[1] - $argv[3]."\n";
else if ($argv[2] == "*")
	echo $argv[1] * $argv[3]."\n";
else if ($argv[2] == "/")
	echo $argv[1] / $argv[3]."\n";
else if ($argv[2] == "%")
	echo $argv[1] % $argv[3]."\n";

