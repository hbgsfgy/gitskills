<?php
	$num = 9;
	for($i = 1;$i<=$num;$i++){
		for($k = 1;$k <= $num - $i; $k++){
			echo "&nbsp;";
		}
		for($j = 1;$j<=2*$i-1;$j++){
			echo "*";
		}
		echo "<br/>";
	}

