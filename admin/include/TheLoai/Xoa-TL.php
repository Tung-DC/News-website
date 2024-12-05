<?php
$CategoryID=$_GET['CategoryID'];
Xoa_TL($CategoryID);
echo"<script>window.location='index.php?ADpage=QL-TL'</script>";
?>