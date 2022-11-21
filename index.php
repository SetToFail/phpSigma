<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cybin Danila, Laboratory work 8</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="x" placeholder="x">
		<input type="text" name="N" placeholder="N">
		<input type="submit" name="submit">
	</form>
	<?php
	$summ = 0;
	if (isset($_POST['x'])&&isset($_POST['N'])){
		$x = $_POST['x'];
		$N = $_POST['N'];
		
		for($i = 1; $i <= $N; $i++){
			$summ += ((-1)**$i)*($x**(2*$i))/(sigma((2*$i)+1));
		}
		echo $summ;
	}
	function sigma($x) {
			if($x == 0) {
				return 1;
			}
			if($x < 0 ) {
				return undefined;
			}
			for($i = $x; --$i; ) {
				$x *= $i;
			}
			return $x;
		}
	?>
</body>
</html>