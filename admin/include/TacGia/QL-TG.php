<?php 
	if($_SESSION['quyenhan']=='1'){
	?>
    
    <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Danh Sách <small>Tác giả</small>
                        </h1>
                    </div>
</div> 
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <a href="?ADpage=Them-TG" class="btn btn-info" >Thêm Tác Giả</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>UserID</th>
                                            <th>UserName</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                           
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
											  
											  $QL_TG=QL_TG();
											foreach($QL_TG as $row)
											{
												echo "
													<tr class='gradeU'>
														
														
														<td>".$row['UserID']."</td>
														<td   class='center'>
															".$row['UserName']."
														</td>
														<td class='center'>".$row['Name']."</td>
														<td class='center'>".$row['Email']."</td>
														<td class='center'>".$row['Phone']."</td>
														
														<td><a href='?ADpage=Sua-TG&&UserID=".$row['UserID']."'>edit</a></td>
														<td><a href='?ADpage=Xoa-TG&&UserID=".$row['UserID']."' onclick='return deleteAction();'>delete</a></td>				
													</tr>
												";
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
                
    
    <?php }?>
	