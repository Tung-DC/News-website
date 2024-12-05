<?php
	
	$CategoryID=$_GET['CategoryID'];
	$Category=TL($CategoryID);
	$row=$Category->fetch();
	
?>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Sửa danh mục
                        </div>
                        <div class="panel-body">
                                    <form role="form" method="post">
                                        <div class="form-group">
                                        
                                            <label>Tên danh mục</label>
                                            <input class="form-control" name="danhmuc"  required value="<?php echo $row['CategoryName']?>">
                                           
                                        </div> 
                                        <div class="form-group">
                                        	 <button class="btn btn-info " name="BtnSuaTL"  onclick="return edit();" >Sửa</button>
                                        </div>
                                 </form>
                            </div>
                            </div>
</div><!--row -->                  
 <?php	
                                     if(isset($_POST['BtnSuaTL']))
										{   $CategoryName=$_POST['danhmuc'];
											
											
											SUA_TL($CategoryID,$CategoryName);
											echo "<script>window.location='index.php?ADpage=QL-TL'</script>";
										}
									 
									 ?>    
                