 <?php 
 	session_start();
	error_reporting(E_ALL^E_DEPRECATED);
	mysql_connect("localhost","root","");
	mysql_select_db("acet");
	
	if(!isset($_SESSION['user'])){
		header("location: session.php");
	}
	echo $_SESSION['user'];
  ?>
 	<h1>Home Page</h1>
 	<a href="logout.php">Logout</a>