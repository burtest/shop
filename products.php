<?php 
require_once("templates/top.php");
?>
<table style="width:100%;">
<tr>
<td style="border:3px solid black;"> name </td>
<td style="border:3px solid black;"> text </td>
<td style="border:3px solid black;"> picture</td>
<td style="border:3px solid black;"> price</td>
<td style="border:3px solid black;"> product code</td>
<td style="border:3px solid black;"> status</td>
<td style="border:3px solid black;"> red</td>
</tr>
<?
if($_SESSION['user_id']){


	$query = "SELECT * FROM products WHERE user_id=".$_SESSION['user_id']."";
	$adr = mysqli_query($db_con, $query);
		if(!$adr){
			exit($query);
		}
	while( $tbl_maintext= mysqli_fetch_array($adr)){
		$id=(int)$tbl_maintext['id'];
	?>
<tr >
<td style="border:3px solid black;"> <?=$tbl_maintext['name'];?> </td>
<td style="border:3px solid black;"> <?=$tbl_maintext['body'];?> </td>
<td style="border:3px solid black;width:200px;"> <img style="width:200px;height:200px;"src="/images/uploads/<?=$tbl_maintext['picture'];?>"></td>
<td style="border:3px solid black;"> <?=$tbl_maintext['price'];?></td>
<td style="border:3px solid black;"> <?=$tbl_maintext['product_code'];?></td>
<td style="border:3px solid black;"> <?=$tbl_maintext['status'];?></td>
<td style="border:3px solid black;"><a href="prodedit.php?id=<?php echo $id;?>" class="btn btn-success btn-block edit">Редактировать</a></br><a href="#" onClick="delete_position('proddel.php?id=<?php echo $id?>','Вы хотите удалить?')" class="btn btn-warning btn-block delete">Удалить</a></td>

</tr>
	
	
	
	
	<?
		
	}
	
	
	
}






?>

</table>


  </div>





























<?php require_once("templates/buttom.php")?>
     