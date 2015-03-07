<?php 
require"db.php";
     if(isset($_POST['submit']))
      {
         $u=$_POST['username'];
         $id=$_GET['userid'];
         $q=mysql_query("update achin set username='$u'where id='$id'"); 
         if($q)
          {
              header("location:select.php");
           }
       }



$id=$_GET["userid"];
$q=mysql_query("select * from achin where id='$id'");
$r=mysql_fetch_assoc($q);

?>
<form method="post">
		<input type="text" name="username" value="<?php echo $r["username"]; ?>">
		<input type="submit" name="submit" value="update">
	</form>