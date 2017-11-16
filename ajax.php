<?php
require_once('config/config.php');
$p_url=$_POST['url'];
$arr= explode('=', $p_url);
$query="SELECT * FROM maintexts WHERE url='".$arr[1]."'";

$adr = mysqli_query($db_con, $query);
		if(!$adr){
			exit($query);
		}
$maintexts =mysqli_fetch_array($adr);
echo "<h2>".$maintexts['name']."</h2>";
echo "<p>".$maintexts['body']."</p>";


?>
     