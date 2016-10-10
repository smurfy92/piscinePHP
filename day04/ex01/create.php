<?php


if ($_POST["login"] && $_POST["passwd"] && $_POST["submit"] == "OK")
{
	$user["login"] = $_POST["login"];
	$user["passwd"] = hash("whirlpool", $_POST["passwd"]);
	if (!file_exists("../private"))
		mkdir("../private");
	if (file_exists("../private/passwd"))
		$users = file_get_contents("../private/passwd");
	$users = unserialize($users);
	if (!$users)
		$users = [];
	foreach($users as $key => $val)
	{
		if ($val["login"] == $user["login"])
		{
			echo "ERROR\n";
			exit ;
		}
	}
	$users[] = $user;
	file_put_contents("../private/passwd", serialize($users));
	echo "OK\n";
}
else
	echo "ERROR\n";
 ?>