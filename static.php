<?php 
$title ="Страница";
require_once("templates/top.php");
if(isset($_GET['url'])){
	$url=$_GET['url'];
	
}
else{
	$url='index';
}
$query="SELECT * FROM maintexts
		WHERE url='$url'";
		$adr=mysqli_query($db_con,$query);
		if(!$adr){
			exit($query);
			
		}
		$tbl_maintext=mysqli_fetch_array($adr);
		/* echo"<pre>";
		print_r($tbl_maintext);
		echo"</pre>"; */
require_once("templates/menu.php");

?>

        

        <div class="col-lg-9">
<h2>
      <?=$tbl_maintext['name'];?>   
</h2>
        </div>
       
<?php require_once("templates/buttom.php")?>
     