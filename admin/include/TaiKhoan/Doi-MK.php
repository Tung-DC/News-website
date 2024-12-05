<?php
	$UserID=$_SESSION['UserID'];
	
?>

<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="col-md-12 text-center">
                        <h1 class="page-header">
                            Đổi Mật Khẩu Cấp 1
                        </h1>
                    </div>
                   
                        <div class="panel-body">
                            <div class="row">
                             
                                <div class="col-lg-5">
                                <br>
                                <br>
                                    <form  method="post" >
                                        
                                        <div class="form-group">
                                            <label>Password 2 :</label>
                                            <input class="form-control" name="Password2" type="password" required value="">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Password 1 :</label>
                                            <input class="form-control" name="Password1" type="password"  required value="">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Nhập Lại Password 1 :</label>
                                            <input class="form-control" name="Password1_2"  type="password" required value="">
                                            
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                        	<button class="btn btn-primary" name="BtnDoiMK" onClick="return edit();" >Thay Đổi</button>
                                            
                                        </div>
                                     </form>
                                     <?php
                                     	if(isset($_POST['BtnDoiMK']))
										{
											$Password2=$_POST['Password2'];
											$Password1=$_POST['Password1'];
											$Password1_2=$_POST['Password1_2'];
											if($Password1==$Password1_2)
											{	
													$Select_MK2=Select_MK2($UserID);
													$row_Select_MK2=$Select_MK2->fetch();
													if($Password2==$row_Select_MK2['Password2'])
													{
														Doi_MK($UserID,$Password1);
														echo "<script>alert('Vui Lòng Đăng Nhập Lại !');window.location='index.php?ADpage=Log-out'</script>";
													}
													else
														echo "<script>alert('Password 2 không chính xác !')</script>";
											}
											else
												echo "<script>alert('Password 1 không giống !')</script>";
												
												
												
										}
									 ?>
                                     </div><!-- col-lg-8--->
                                    </div>   <!--row -->
                                    </div>
                                    </div>
                                    </div><!-- col-lg-12 --->
                                    </div><!-- row --->
                                   