#!/usr/bin/php
<?php
$i = -1;
$argv[1] = ltrim(rtrim($argv[1]));
while ($argv[1][++$i])
{
	if (!($argv[1][$i] == " " && $argv[1][$i + 1] == " "))
		echo $argv[1][$i];
}
echo "\n";