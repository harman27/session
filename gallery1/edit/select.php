<?php 
	require "db.php";
	
	
	 $q= mysql_query("select * from achin");
	  while($r= mysql_fetch_assoc($q))
	  {
		//print_r($r);
		echo $r["username"];
		echo "<a href='edit.php?userid=".$r['id']."'>edit</a>";
		echo "<br>";
	  }
	
	?>