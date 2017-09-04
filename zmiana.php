
<?php

session_start();



require_once "coonect.php";



	$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);
	
	$mal = $_POST['mal'];
	$pol = $_POST['pol'];
	
	
	if($polaczenie->connect_errno!=0)
	{
		echo "Błąd:".$polaczenie->connect_errno;
	}
	else
	{	
		$polaczenie->query(sprintf("UPDATE oferta SET malowanie='%d',polerka='%d' WHERE 1",
		$mal,$pol));

		header('Location: oferta.php');
		
	}
			
		$polaczenie->close();
		
	

	
?>

