<?
require_once("templates/top.php");
 if($_SESSION['user_id']){
	if($_POST){
		$pname =$_POST['name'];
		$pbody =$_POST['body'];
		$pcatalog_id= (int)$_POST['catalog_id'];
		//$price =10000;
	if($_FILES){
		$_FILES['pictures']['type'];
		//echo"<pre>";
	//print_r($_FILES);
	//echo"</pre>";
	$file_name_tmp = $_FILES['picture']['tmp_name'];
	$dir = '/images/uploads/';
	$file_new_name = $_SERVER['DOCUMENT_ROOT'].$dir;
	$picture = $_FILES['picture']['name'];
	//$picture= date('y_m_d_h_i_s').'jpg';
	if(move_uploaded_file($file_name_tmp, $file_new_name.$picture)){
		$ok=true;
	} 
	}else{
		$picture='';
		echo"no file";
	}
	$query="INSERT INTO products VALUES(
	NULL,
	'$pname',
	'$pbody',
	'$picture',
	'-',
	0,
	NOW(),
	'-',
	'".date('ymdhis')."',
	'new',
	'$pcatalog_id',
	'".$_SESSION['user_id']."'
	)";
	$adr = mysqli_query($db_con,$query);
	if(!$adr){
		exit('error');
	}
	?>
	<script>
	document.location.href="cabinet.php";
	</script>
	<?
	}
	?>
	
	
	
	
	
	
	
	
     <form action="cabinet.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
	<textarea class="form-control" name="body" id="body" rows="3"></textarea>
    
	
  </div>
  <div class="form-group">
    <label for="picture">File input</label>
    <input type="file" id="picture" name="picture">
    
  </div>
  <div class="form-group">
    <label for="picture">Category
      
    </label>
	<select class="form-control" name="catalog_id">
	<?php
	$query = "SELECT * FROM catalogs";
	$adr =mysqli_query($db_con, $query);
	if(!$adr){
		exit('error');
	}
	while($cats =mysqli_fetch_array($adr)){
		?>
		<option value="<?php echo $cats['id']?>"><?php echo $cats['name']?></option>
		<?php
	}
	?>
	
	</select>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

 <?
 }
 else{
	?>
	
	 <div class="error">Ошибка</div> 
	<?
} 
?>

























