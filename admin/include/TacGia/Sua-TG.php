<?php 
	if($_SESSION['quyenhan']=='1'){
	?>
	
    <?php
		$UserID=$_GET['UserID'];
    	$Select_TG=Select_TG($UserID);
		$row=$Select_TG->fetch();
		?>
    
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Thêm <small>Tác Giả</small>
                        </h1>
                    </div>
</div> 
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <form  method="post">
                                        
                                        <div class="form-group">
                                            <label>UserName</label>
                                            <input class="form-control"  disabled="disabled"  value="<?php echo $row['UserName']?>"   required="required" name="UserName">
                                        </div>
                                         <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control"  value="<?php echo $row['Password']?>" required="required"  type="password" name="Password">
                                        </div>
                                         <div class="form-group">
                                            <label>Password 2</label>
                                            <input class="form-control"  value="<?php echo $row['Password2']?>" required="required"  type="password"  name="Password2">
                                        </div>
                                       	 <div class="form-group">
                                            <label>LastName</label>
                                            <input class="form-control"  value="<?php echo $row['Name']?>"  required="required" name="LastName">
                                        </div>
                                         <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email" value="<?php echo $row['Email']?>" required="required"    name="Email">
                                        </div>
                                         <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" type="text" value="<?php echo $row['Phone']?>"  required="required"  name="Phone">
                                        </div>
                                         <div class="form-group">
                                            <label>Password 2 của QTV</label>
                                            <input class="form-control" type="password"  required="required"   name="Pass2QTV">
                                        </div>
                                        <div class="form-group">
                                        	<button class="btn btn-info" name="BtnSuaTG">Sửa</button>
                                            <button class="btn btn-info" type="reset" >Reset</button>
                                        </div>
                                     </form>
                                     <?php
									 		
											
                                     		if(isset($_POST['BtnSuaTG']))
											{   $UserName=$_POST['UserName'];
												$Password=$_POST['Password'];
												$Password2=$_POST['Password2'];
												$LastName=$_POST["LastName"]; 
												$Email=$_POST["Email"]; 
												$Phone=$_POST["Phone"]; 
												$Pass2QTV=$_POST["Pass2QTV"]; 
												
												$select_pass2QTV=select_pass2QTV();
												$row2=$select_pass2QTV->fetch();
												if($row2['Password2']==$Pass2QTV)
												{
													Sua_TG($Password,$Password2,$LastName,$Email,$Phone,$UserID);
													echo"<script>alert('Update Thành Công !'); 	 	 window.location='index.php?ADpage=QL-TG'</script>";
												}
												else
													echo"<script>alert('Mật Khẩu cấp 2 của QTV không đúng !'); 	 	 window.location='index.php?ADpage=Them-TG'</script>";								
											}
									 
									 ?>
                                     </div><!-- col-lg-8--->
                                    </div>   <!--row -->
                                    </div>
                                    </div>
                                    </div><!-- col-lg-12 --->
                                    </div><!-- row --->
                                   	
    
    <?php }?>