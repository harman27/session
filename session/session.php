<?php 
	session_start();
	error_reporting(E_ALL^E_DEPRECATED);
	mysql_connect("localhost","root","");
	mysql_select_db("acet");
	if(isset($_POST['submit'])){
	$u= $_POST['username'];
	$p= $_POST['password'];

	$q=mysql_query("select * from users where username='$u' and password='$p' ");
	$count= mysql_num_rows($q);
	if($count==0){
		echo "invalid username/password";
	}else{
		$_SESSION['user']=$u;
		header("location: home.php");}}

?>
<form action="" method="post">
	<input type="text" name="username" >
	<input type="password" name="password" id="">
	<input type="submit" value="Login" name="submit">
</form>




