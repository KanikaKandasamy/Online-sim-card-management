<?php
$connection=oci_connect('system','140478','localhost/xe') or die("Critical Error:Could not connect to database.\n\n".oci_error());
if($connection)
{
echo 'connnected';
}
else
echo 'not connected';
?>