<?php require_once('templates/top.php');
if ($_POST) {
	echo "<pre>";
	print_r($_POST);
	echo "</pre>"; 
	$pname = $_POST['name'];
	$pemail = $_POST['email'];
	$ppassword = $_POST['password'];
	$ppassword_again = $_POST['password_again'];
	$errors=array();
	if(!$pname){
		$errors[]= "Поле name не заполнено";
	}
	if(!$pemail){
		$errors[]= "Поле email не заполнено";
	}
	if(!$ppassword){
		$errors[]= "Поле password не заполнено";
	}
	if($ppassword != $ppassword_again){
		$errors[]= "Поле password не совпадает";
		
	}
	
	
	
	
	
	
	if(!empty($errors)){
	foreach	($errors as $error){
		echo"<div class='error red' style='color:red'>";
		echo $error;	
		echo "</div>";
	}
	
		
	}
	else{
		//echo"OK";
		$query ="INSERT INTO users VALUES(
		NULL,
		'$pname',
		'$pemail',
		'$ppassword',
		'unblock',
		NOW(),
		NOW()
		)";
		$adr = mysqli_query($db_con, $query);
		if (!$adr){
			exit($query);
		}
		?>
		<script>
		document.location.href="login.php";
		</script>
		<?
	}

}
?>



<form method="post" action="register.php">
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="password_again">Password again</label>
    <input type="password" name="password_again" class="form-control" id="password_again" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>








<?php require_once('templates/buttom.php')?>