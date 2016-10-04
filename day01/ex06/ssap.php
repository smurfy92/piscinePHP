#!/usr/bin/php
<?php
unset($argv[0]);
sort($argv);
$i = -1;
while ($argv[++$i])
{
	echo $argv[$i]."\n";
}