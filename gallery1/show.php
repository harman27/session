 <?php 
	error_reporting(E_ALL^E_DEPRECATED);
	mysql_connect("localhost","root","");
	mysql_select_db("gallery");
 	$q= mysql_query("select * from images");
 	while($r= mysql_fetch_assoc($q)){
 		echo '<img src="gallery/'.$r['name'].'" width="50" alt="">';
 	}

 	?>
