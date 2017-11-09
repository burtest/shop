<?php require_once('templates/top.php');
if ($_POST) {
	 echo "<pre>";
	print_r($_POST);
	print_r($_SESSION);
	
	echo "</pre>"; 
	
	$pemail = $_POST['email'];
	$ppassword = $_POST['password'];
	$errors=array();
	
	if(!$pemail){
		$errors[]= "Поле email не заполнено";
	}
	if(!$ppassword){
		$errors[]= "Поле password не заполнено";
	}
	
	$query = "SELECT * FROM users WHERE email='$pemail' AND password='$ppassword'";
	$adr = mysqli_query($db_con, $query);
		if(!$adr){
			exit($query);
		}
		$user=mysqli_fetch_array($adr);
if(empty($user)){
	$errors[]="Ошибка входа";
}		
if(!empty($errors)){
	foreach	($errors as $error){
		echo"<div class='error red' style='color:red'>";
		echo $error;	
		echo "</div>";
	}
}
else{
	 $_SESSION['user_id']=$user['id']; 
	 ?>
	  <script>
	 document.location.href="cabinet.php";
	 </script>  
	<?php
	
	
}
		
}
?>



<form method="post" action="login.php">

  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>








<?php require_once('templates/buttom.php')?>