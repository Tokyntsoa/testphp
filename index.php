<!doctype html> 
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Mon premier projet Git</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<h1>ANDRANA PHP SY OPENSHIFT 3.9</h1>
		<?php
		$couleur=array("00","33","66","99","CC","FF");
		for($Rouge=0;$Rouge<6;$Rouge++)
		{
			echo "<table>";
				for($Bleu=0;$Bleu<6;$Bleu++)
				{
					echo "<tr>";
						for($Vert=0;$Vert<6;$Vert++)
							{
								$Cellule=$couleur[$Rouge].$couleur[$Vert].$couleur[$Bleu];
								echo "<td width='100' bgcolor=#".$Cellule.">";
									echo $Cellule;
								echo"</td>";
							}	
					echo"</tr>";
				}	
			echo "</table>";
		}	
		?>
		
	</body>
</html>