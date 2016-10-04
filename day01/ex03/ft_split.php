#!/usr/bin/php
<?php

function ft_split($string)
{
	$tab = explode(" ", $string);
	sort($tab);
	return ($tab);
}
?>