<link rel="stylesheet" href="colorbox.css">
<script src="jquery.js"></script>
<script src="jquery.colorbox-min.js"></script>
<script>
	$(function(){
		$('a.gallery').colorbox({rel:'gal'});
	});

</script>
 <?php 
	error_reporting(E_ALL^E_DEPRECATED);
	mysql_connect("localhost","root","");
	mysql_select_db("gallery");
 	$q= mysql_query("select * from images");
 	while($r= mysql_fetch_assoc($q)){
 		echo '<a class="gallery" href="gallery/'.$r['name'].'"><img src="gallery/'.$r['name'].'" width="50" alt=""></a>';
 	}

 	?>
