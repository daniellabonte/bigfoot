
<?php
//Constants
	define('CO_NAME',      'BIGfoot');
	define('COMPANY_NAME', 'BIGfoot Sock Co.');

/*DBas connect*****************************************************************/
	define('DATABASE_HOST','localhost');

//replace this with your computer name so it will connect to your local databse
	//Joey's dbas login
	if(php_uname('n') === "JOSEPH")
	{
		define('DATABASE_NAME',     'leesj_db');
		define('DATABASE_USER',     'leesj');
		define('DATABASE_PASSWORD', 'batman1997');
	}
	//Kelley's dbas login
	elseif(php_uname('n') === "kelleys_computerName")
	{
		define('DATABASE_NAME',     '');
		define('DATABASE_USER',     '');
		define('DATABASE_PASSWORD', '');
	}
	//Ryan's dbas login
	elseif(php_uname('n') == "MSI")
	{
		define('DATABASE_NAME',     'ramkalawanr_db');
		define('DATABASE_USER',     'ramkalawanr');
		define('DATABASE_PASSWORD', 'greenday');
	}
	//For testing, its going on labonted's directory
	//Subject to change depending on if we get group a directory on the opentech server
	else
	{
		define('DATABASE_NAME',     'labonted_db');
		define('DATABASE_USER',     'labonted');
		define('DATABASE_PASSWORD', '100525741');
	}

/*Saltiness********************************************************************/
	define("SALT", 'f7uI9tR4e3sKM70p');

?>
