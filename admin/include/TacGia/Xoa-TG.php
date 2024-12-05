<?php
$UserID=$_GET['UserID'];
if($UserID!=1)
	{Xoa_TG($UserID);
echo"<script>window.location='index.php?ADpage=QL-TG'</script>";}
else
	echo"<script>alert('Không cho phép Xóa User này !');window.location='index.php?ADpage=QL-TG'</script>";
?>