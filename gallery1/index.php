<?php 
	error_reporting(E_ALL^E_DEPRECATED);
	mysql_connect("localhost","root","");
	mysql_select_db("gallery");
	if(isset($_POST['submit'])){
		$filename= $_FILES['upload']['name'];
		$ext= explode(".", $filename);
		$ext= strtolower(end($ext));
		$allowed= ["jpg","png","gif"];
		if(in_array($ext, $allowed)){
			$random= rand(11111,99999);
			$time= time();
			$new_name= $time.$random.$filename;
			if(move_uploaded_file($_FILES['upload']['tmp_name'], "gallery/".$new_name)){
				$q= mysql_query("insert into images ( name) values ('$new_name')");
			}else{
				echo "error";
			}
		}else{
			echo "not";
		}
	}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<form action="" enctype="multipart/form-data" method="post">
 		<input type="file" name="upload" id=""> <br>
 		<input type="submit" value="Upload" name="submit">
 	</form>
	<a href="show.php">show images</a>
 </body>
 </html>