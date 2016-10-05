#!/usr/bin/php
<?php
if ($argc > 1)
{
	if (file_exists($argv[1]))
	{
		$page = file_get_contents($argv[1]);
		$page = preg_replace_callback(
				"/(title=[\"'])(.*?)([\"'])/i",
				function ($matches) {
					return $matches[1].strtoupper($matches[2]).$matches[3];
				}, $page
				);
		$page = preg_replace_callback(
				"/(<a href.*?>)(.*?)(<)/i",
				function ($matches) {
					return $matches[1].strtoupper($matches[2]).$matches[3];
				}, $page
				);
		echo $page;
	}
}