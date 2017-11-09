<?php 
$title ="Страница";
require_once("templates/top.php");
if(isset($_GET['url'])){
	$url=$_GET['url'];
	
}
else{
	$id=(int)$_GET['id'];
}
$query="SELECT * FROM catalogs
		WHERE id='$id'";
		$adr=mysqli_query($db_con,$query);
		if(!$adr){
			exit($query);
			
		}
		$tbl_catalogs=mysqli_fetch_array($adr);
		 echo"<pre>";
		print_r($tbl_catalog);
		echo"</pre>"; 
require_once("templates/menu.php");

?>

        

        <div class="col-lg-9">
<h2>
gfgfg
      <?=$tbl_catalog['name'];?>   
</h2>
        </div>
       
<?php require_once("templates/buttom.php")?>
     