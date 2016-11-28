<!DOCTYPE html>
<html>
<head>
	<title>Testing</title>
</head>
<body>
<h3>Belajar</h3>
<ul>
	<?php 
		for($i=0; $i<count($belajar)-1; $i++) //nilai ini akan dinamis sesuai nilai array
		{
			echo "<li>".$belajar[$i]."</li>";
		}
	 ?>
</ul>

</body>
</html>