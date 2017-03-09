<?php
	
	$dbconn = db_connect();
	
	function db_connect()
	{
		$connection = pg_connect("host=".DATABASE_HOST." dbname=".DATABASE_NAME." user=".DATABASE_USER." password=".DATABASE_PASSWORD);	
		return $connection;
	}

	/*
	 *	this function should be passed a integer power of 2, and any decimal number,
	 *	it will return true (1) if the power of 2 is contain as part of the decimal argument
	*/
	function isBitSet($power, $decimal) {
		if((pow(2,$power)) & ($decimal)) 
			return 1;
		else
			return 0;
	}
?>