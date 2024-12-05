<?php
$ArticleID=$_GET['ArticleID'];
Xoa_BV($ArticleID);
echo"<script>window.location='index.php?ADpage=QL-BV'</script>";
?>