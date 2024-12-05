

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
                             
                                <div class="col-lg-10">
                                <br>
                                <br>
                                    <form  method="post" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label>Họ Tên :</label>
                                            <?php echo $_SESSION['hotenadmin'] ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Email :</label>
                                            <?php echo $_SESSION['email'] ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone :</label>
                                            <?php echo $_SESSION['phone'] ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Chức danh</label>
                                            <?php  if($_SESSION['quyenhan']!=1){ echo "Tác Giả";} else echo "Quản Trị Viên/Tác Giả";  ?>
                                        </div>
                                        
                                        <div class="form-group">
                                        	<a href="?ADpage=Sua-TT"  class="btn btn-primary" >Sửa Thông Tin</a>
                                            
                                        </div>
                                     </form>
                                     
                                     </div><!-- col-lg-8--->
                                    </div>   <!--row -->
                                    </div>
                                    </div>
                                    </div><!-- col-lg-12 --->
                                    </div><!-- row --->
                                   