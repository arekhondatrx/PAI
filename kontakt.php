<?php
session_start();



?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta chrset="utf-8"/>
	<meta name="keywords" content="Bellak"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

	<title>Bellak</title>
	
	<link rel="stylesheet" href="styl.css" type="text/css"/>
	<link rel="stylesheet" href="css/fontello.css" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lato" rel="stylesheet">
	
	<script src="timer.js"></script>
	
</head>

<body onload="odliczanie();">

	<div id="pojemnik">
		
		<div id="logo">
			<h1>Bellak</h1>
		</div>
		
	
		
		
		<div id="lewy">
			<div class="t1">
			<a href="index.php" class="tilelink"><i class="icon-desktop"></i><br />Strona główna</a>
			
			</div>
			
			<div class="t1">
			<a href="oferta.php" class="tilelink"><i class="icon-cab"></i><br />Oferta</a>
			</div>
			
			<div class="t1">
			<a href="kontakt.php" class="tilelink"><i class="icon-mail"></i><br />Kontakt</a>
			</div>
			
			<?php
			if(isset($_SESSION['zalogowany']))
		{
echo <<<i
			<div class="t1">
			<a href="administracja.php" class="tilelink"><i class="icon-calendar-empty"></i><br />Administracja</a>
			</div>

i;
		}
			?>
			<div id="zegar">
		
			</div>
			<div style="clear:both;"></div>
			
		
		
		
		</div>
		
		
		<div id="srodek">
		
		Adres: <br /> <br />
		Gdynia ul. Łanowa 23a <br /> <br />
		Telefon: 517-383-990 <br /> <br />
		Godziny otwarcia:<br />
		9:00-17:00
		
		
		</div>
		<?php
		
		if(!isset($_SESSION['zalogowany']))
		{
echo<<< p
		<div id="prawy">
			<form action="zaloguj.php" method="post">
				<div class="t3">
				Administracja
				</div>
		
				<div class="t2">
		        
					<div class="p">
					Login:
					</div>
					<input type="text" name="login" /><br />
					<div class="p">
					Hasło:
					</div>
					<input type="password" name="haslo" /><br /><br />
				
				</div>
			
				<div class="t3">
				<input type="submit" value="Zaloguj się"/>
				</div>
			</form>
			
		</div>
p;
		
		}
		else
		{
echo<<< o
		<div id="prawy">
			<form action="wyloguj.php" method="post">
				<div class="t3">
				Administracja
				</div>
		
				<div class="t2">
		        
					
					 Witaj administratorze
					
				
				</div>
			
				<div class="t3">
				<input type="submit" value="Wyloguj się"/>
				</div>
			</form>
			
		</div>

o;
			
		}
		?>
		
		
		
		<div id="stopka">
		Stronę wykonał: Arkadiusz Hallmann 
		</div>
	
	
	</div>

</body>

</html>