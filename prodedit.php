<?php 

require_once("templates/top.php");

if($_SESSION['user_id']){
	
	
	
	
if($_GET['id']){
$id=(int)$_GET['id'];
}
else{
	$id=0;
}
 $query="SELECT * FROM products WHERE id=$id";
$adr = mysqli_query($db_con, $query);
if(!$adr){
			exit($query);
		}
$prod =mysqli_fetch_array($adr); 



if($prod['picture'])	{
	$file='images/uploads/'.$prod['picture'];
	if(file_exists($file)){
		@unlink($file);
		
	}
	
	
}




if ($_POST){
	$pname =$_POST['name'];
	$pbody =$_POST['body'];
	$pcatalog_id= (int)$_POST['catalog_id'];
	if($_FILES){
		$_FILES['pictures']['type'];
	$file_name_tmp = $_FILES['picture']['tmp_name'];
	$dir = '/images/uploads/';
	$file_new_name = $_SERVER['DOCUMENT_ROOT'].$dir;
	$picture = $_FILES['picture']['name'];
	
	if(move_uploaded_file($file_name_tmp, $file_new_name.$picture)){
		$ok=true;
	} 
	}else{
		$picture='';
		echo"no file";
	}
	$query= "UPDATE products SET name='$pname', body='$pbody', catalog_id='$pcatalog_id', picture='$picture' WHERE id =$id AND user_id=".$_SESSION['user_id']."";
	$adr = mysqli_query($db_con, $query);
if(!$adr){
			exit($query);
		}
	

  ?>
<script>
	document.location.href="products.php";
</script>
<?  
}
}
?>






















    <form action="prodedit.php?id=<? echo $id ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Name" value="<?echo $prod['name']?>">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
	<textarea class="form-control" name="body" id="body" rows="3"><?echo $prod['body']?></textarea>
    
	
  </div>
  <div class="form-group">
    <label for="picture">File input</label>
    <input type="file" id="picture" name="picture">
    
  </div>
  <div class="form-group">
    <label for="picture">Category
      
    </label>
	
	
	</select>
  </div>
  <button type="submit" class="btn btn-default">Редактировать</button>
</form> 




















	
<?php require_once("templates/buttom.php")?>
     