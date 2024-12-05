<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Quản Lý <small>bài viết</small>
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
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Img</th>
                                            <th>Time</th>
                                            <th>Category</th>
                                            <th>Author</th>
                                            <th>Popular</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
											  if($_SESSION['quyenhan']=='1')
                                        			$QL_BV=QL_BV();
											  else 
											  		$QL_BV=QL_BV_User($_SESSION['UserID']);
											foreach($QL_BV as $row)
											{
												echo "
													<tr class='gradeU'>
														<td>".$row['ArticleID']." ";
																	if($row['Status']=='0')
																	echo"(Chờ Duyệt)";
														echo"</td>
														<td>".$row['Title']."</td>
														<td   class='center'>
															<img src='../upload/".$row['Img']."'   width='70px' height='35px'/>
														</td>
														<td class='center'>".$row['Day']." ".$row['Time']."</td>
														<td class='center'>".$row['CategoryName']."</td>
														<td class='center'>".$row['Name']."</td>
														";
														?>
                                                        <td class='center'>
														<?php
															 if($row['Popular']==1) 
															 		echo"<a onclick='return status();' href='?ADpage=Sua-Popular&&ArticleID=".$row['ArticleID']."&&Popular=".$row['Popular']."'>Có</a>"; 
															else 
																echo "<a onclick='return status();' href='?ADpage=Sua-Popular&&ArticleID=".$row['ArticleID']."&&Popular=".$row['Popular']."'>Không</a>"?>
                                                        
                                                        </td>
                                                        <?php
														echo "
														
														<td><a href='?ADpage=Sua-BV&&ArticleID=".$row['ArticleID']."'>edit</a></td>
														<td><a href='?ADpage=Xoa-BV&&ArticleID=".$row['ArticleID']."' onclick='return deleteAction();'>delete</a></td>
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
                