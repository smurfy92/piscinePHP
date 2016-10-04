#!/usr/bin/php
<?php

function 	putzero()
{
	if (file_exists("toto.txt"))
		unlink("toto.txt");
	$handle = fopen("toto.txt", "w+");
	fwrite($handle, "0");
	$count = 0;
	fclose($handle);
}

if ($argc != 1)
{
	if (!file_exists("toto.txt"))
		putzero();
	else{
		if (filesize("toto.txt") == 0)
			putzero();
		else{
			$handle = fopen("toto.txt", "r");
			$count = fread($handle, filesize("toto.txt"));
			fclose($handle);
			if (strcmp($count, "0") != 0 && strcmp($count, "1") != 0 && strcmp($count, "2") != 0)
			{
				putzero();
			}
			else
			{
				$handle = fopen("toto.txt", "w");
				fwrite($handle, ++$count);
				fclose($handle);
			}
		}
	}
	if ($count == 0)
	{
		echo "Tout simplement pour qu'en feuilletant le sujet\n";
		echo "on ne s'apercoive pas de la nature de l'exo\n";
	}
	else if ($count == 1)
	{
		echo "Parce que Kwame a des enfants\n";
	}
	else if ($count == 2)
	{
		echo "Nan c'est parce que c'est le premier avril\n";
	}
	else if ($count == 3)
	{
		echo "Oui il a vraiment des enfants\n";
		unlink("toto.txt");
	}
}