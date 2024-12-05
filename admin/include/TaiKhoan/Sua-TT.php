
<?php
	$Select_TK=Select_TK($_SESSION['UserID']);
	$row=$Select_TK->fetch();
?>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="col-md-12 text-center">
                        <h1 class="page-header">
                            Thông Tin Tài Khoản
                        </h1>
                    </div>
                   
                        <div class="panel-body">
                            <div class="row">
                             
                                <div class="col-lg-5">
                                <br>
                                <br>
                                    <form  method="post" >
                                        
                                        <div class="form-group">
                                            <label>Họ Tên :</label>
                                            <input class="form-control" name="name"  required value="<?php echo $row['Name'] ?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Email :</label>
                                            <input class="form-control" name="email"  type="email" required value="<?php echo $row['Email'] ?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Phone :</label>
                                            <input class="form-control" name="phone"  required value="<?php echo $row['Phone'] ?>">
                                            
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                        	<button class="btn btn-primary" name="BtnSuaTT" onClick="return edit();" >Sửa</button>
                                            
                                        </div>
                                     </form>
                                     <?php
                                     	if(isset($_POST['BtnSuaTT']))
										{
											$name=$_POST['name'];
											$email=$_POST['email'];
											$phone=$_POST['phone'];
											
											
											Sua_TT($name,$email,$phone,$row['UserID']);
									echo "<script>alert('Vui Lòng Đăng Nhập Lại !');window.location='index.php?ADpage=Log-out'</script>";
												
												
												
										}
									 ?>
                                     </div><!-- col-lg-8--->
                                    </div>   <!--row -->
                                    </div>
                                    </div>
                                    </div><!-- col-lg-12 --->
                                    </div><!-- row --->
                                   