<?php

class NightsWatch{


	function recruit($toto)
	{
		if ($toto instanceof IFighter)
			$toto->fight();
	}
}