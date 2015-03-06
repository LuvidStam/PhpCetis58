<html>
<head>
<title>Triangulo pascal</title>
</head>
<body>
<center>

<?php
for ($i=1; $i<11 ; $i++) { 
	for ($j=0; $j<$i ; $j++) { 
		if ($i==1) {
             $num[$j]. "<br/>";
		}
		elseif ($j==0) {
			$num[$j]=1;
			echo $num[$j]. " | ";
		}
		elseif ($j==($i-1)) {
			$num[$j]=1;
			echo $num[$j]. "<br/>";
		}
		else
		{
		  $num[$j]=$pascal[$j]+$pascal[$j-1];
		  echo $num[$j]. " | ";
		}
	}
	$pascal = $num;
}
?>

</center>
</body>
</html>
