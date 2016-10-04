#!/usr/bin/php
<?php
$i = -1;
$argv[1] = rtrim($argv[1]);
while ($argv[1][++$i])
{
	if ($i == 0 && $argv[1][$i] == " ")
	{
		while ($argv[1][$i] == " ")
			$i++;
	}
	if (!($argv[1][$i] == " " && $argv[1][$i + 1] == " "))
		echo $argv[1][$i];
}
echo "\n";