<?php

require ('form.html');

if ('POST'==$_SERVER['REQUEST_METHOD']) {

	if (isset($_POST['percent']) && $_POST['percent']>0 && $_POST ['percent']<100)  {
		$connection=mysqli_connect('127.0.0.1','admin','0000metel','MObiSEarch');
		$percent=
		$query="UPDATE mobile_phones SET price";
	}

}





?>
