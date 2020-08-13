<?php 

//Oracle DB user name
$username = 'system';

// Oracle DB user password
$password = '132099';

// Oracle DB connection string
$connection_string = 'localhost/xe';

//Connect to an Oracle database
$connection = oci_connect(
 $username,
 $password,
 $connection_string
);

If (!$connection)
   echo 'Oops :( connection failed';
else
   echo 'Hooray !!! :) Oracle DB + php => OK ';

// Close connection 
//oci_close($connection);

?>