<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Quản Lý <small>Liên Hệ</small>
                        </h1>
                    </div>
</div> 
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table  table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>ConTent</th>
                                            <th>Time</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                        	$QL_LH=QL_LH();
											foreach($QL_LH as $row)
											{	if($row['Status']==0){//nếu chưa đọc(status=0) thì bằng xanh
													echo "
														<tr class='gradeU success'>
															<td>".$row['Id']."</td>
															<td>".$row['Title']."</td>
															<td>".$row['Content']."</td>
															<td>".$row['Day']." ".$row['Time']."</td>
															<td>".$row['Name']."</td>
															<td>".$row['Email']."</td>
															<td>".$row['Phone']."</td>
															<td><a href='?ADpage=DD-LH&&Id=".$row['Id']."'>Đánh Dấu</a></td>
															<td><a href='?ADpage=Xoa-LH&&Id=".$row['Id']."' onclick='return deleteAction();'>delete</a></td>
														</tr>
													";
												
												}
												else //ngược lại thì màu trắng
													{
														echo "
														<tr class='gradeU'>
															<td>".$row['Id']."</td>
															<td>".$row['Title']."</td>
															<td>".$row['Content']."</td>
															<td>".$row['Day']." ".$row['Time']."</td>
															<td>".$row['Name']."</td>
															<td>".$row['Email']."</td>
															<td>".$row['Phone']."</td>
															<td>Đã Đọc</td>
															<td><a href='?ADpage=Xoa-LH&&Id=".$row['Id']."' onclick='return deleteAction();'>delete</a></td>
														</tr>
													";
													}
												
											}
										
										?>
                                    	
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
       