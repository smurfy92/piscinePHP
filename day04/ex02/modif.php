<?php


if ($_POST["login"] && $_POST["oldpw"] && $_POST["newpw"] && $_POST["submit"] == "OK")
{
	if (!file_exists("../private"))
		mkdir("../private");
	if (file_exists("../private/passwd"))
		$users = file_get_contents("../private/passwd");
	$users = unserialize($users);
	if (!$users)
		$users = [];
	$user["login"] = $_POST["login"];
	$user["passwd"] = hash("whirlpool", $_POST["passwd"]);
	foreach($users as $key => $val)
	{
		if ($val["login"] == $user["login"])
		{

			if ($val["passwd"] == hash("whirlpool", $_POST["oldpw"]))
			{
				$user["passwd"] = hash("whirlpool", $_POST["newpw"]);
				$users[$key] = $user;
				file_put_contents("../private/passwd", serialize($users));
				echo "OK\n";
			}
			else
			{
				echo "ERROR\n";
				exit ;
			}
		}
	}

}
else
{
	echo "ici";
	echo "ERROR\n";
}

 ?>