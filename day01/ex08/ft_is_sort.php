#!/usr/bin/php
<?php

function ft_is_sort($tab)
{
	$tab2 = $tab;
	sort($tab2);
	$i = -1;
	while ($tab[++$i])
	{
		if (strcmp($tab[$i], $tab2[$i]) != 0)
			return 0;
	}
	return 1;
}