<?php session_start();
require "connect.php";

	
$u = $_POST['uname'];
$p = $_POST['password'];

//echo "select * from bcf_admin where username='{$u}' and password='{$p}'";
$chkExt = mysqli_query($conn, "select * from iandslogin where user_name='{$u}' and password='{$p}'");
if($chkExt && mysqli_num_rows($chkExt)>0){
	//valid	
	$_SESSION['name'] = "priyanka";	
	//$_SESSION['uEmailId'] = "";
	header("location: admin_panel.php");
}
else{
	//invalid
	$_SESSION['invUser'] = "yes";			
	//header("location: index.php");		
}
?>
