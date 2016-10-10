<?php

function auth($login, $passwd)
{
	if (!file_exists("../private"))
		mkdir("../private");
	if (file_exists("../private/passwd"))
		$users = file_get_contents("../private/passwd");
	$users = unserialize($users);
	if (!$users)
		$users = [];
	foreach($users as $key => $val)
	{
		if ($val["login"] == $login)
		{

			if ($val["passwd"] == hash("whirlpool", $passwd))
			{
				return TRUE;
			}
		}
	}
	return FALSE;
}


?>