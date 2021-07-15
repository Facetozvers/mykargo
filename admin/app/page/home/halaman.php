<?php
	if(!empty($halaman)){if(isset($_GET['tmp'])) { temp(); } if(isset($_GET['tmp_f'])) { tmp_f();}
		include "../../../data/tmp/$tmp/home.php";
		echo "<br>";

		
		$siapa = $_COOKIE['siapa'];
		if ($siapa == "admin")
		{
		include "grafik_database.php";
		}
		else
		{
			?>
			<center>
<img src="../../../../home/data/image/background/1.png">
<h4>Halaman Login Driver</h4>
</center>
			<?php
		}
	}
	else
	{
		echo "Mau Ngapain..? Halaman Tidak Ada.";	
	}
	?>