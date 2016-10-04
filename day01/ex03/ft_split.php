#!/usr/bin/php
<?php

function ft_split($string)
{
	$string = rtrim(ltrim(preg_replace("/\s\s+/", " ", $string)));
	$tab = explode(" ", $string);
	sort($tab);
	return ($tab);
}
?>