<?php
	 if($_SESSION['quyenhan']=='1'){
		$ArticleID=$_GET['ArticleID'];
		$Popular=$_GET['Popular'];
		if($Popular=='0')
				$Popular='1';
		else
				$Popular='0';
		Sua_Popular($ArticleID,$Popular);
		echo "<script>window.location='index.php?ADpage=QL-BV'</script>";
	
	 }
	 else
	 		echo"<script>alert('Bạn Không có quyền hạn sửa mục này !'); window.location='index.php?ADpage=QL-BV'</script>";

?>