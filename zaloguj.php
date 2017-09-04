
<?php

session_start();

if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: index.php');
		exit();
	}

require_once "coonect.php";

	$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);
	
	if($polaczenie->connect_errno!=0)
	{
		echo "Błąd:".$polaczenie->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$haslo= $_POST['haslo'];
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
		
		
		
		if ($rezult = @$polaczenie->query(
		sprintf("SELECT * FROM log WHERE login='%s' AND haslo='%s'",
		mysqli_real_escape_string($polaczenie,$login),
		mysqli_real_escape_string($polaczenie,$haslo))))
		{	
			$ilu_userow =$rezult->num_rows;
			if($ilu_userow>0)
			{
				$_SESSION['zalogowany'] = true;
				
				$wiersz=$rezult->fetch_assoc();
				$_SESSION['id'] = $wiersz['id'];
				$_SESSION['login'] = $wiersz['login'];
				
				
				unset($_SESSION['blad']);
				$rezult->free();
				
				header('Location: administracja.php');
			}
			else
			{
				$_SESSION['blad']='<span style="color:red"> Nieprawidlowy login lub haslo!</span>';
				header('Location: index.php');
			}
		}
		
		$polaczenie->close();
	}

	
	




	 

	
?>

