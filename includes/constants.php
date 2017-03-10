
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
	//Daniel named his database the same as on the server... so yeah
	else
	{
		define('DATABASE_NAME',     'group19_db');
		define('DATABASE_USER',     'group19_admin');
		define('DATABASE_PASSWORD', 'bluespider202');
	}

/*Saltiness********************************************************************/
	define("SALT", 'd3okJh98dAsDf');

?>
