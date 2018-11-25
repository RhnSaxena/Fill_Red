<?php
session_start();
include "./DB/DbConnection.php";
								$query='SELECT request.rid,pFName,pLName,pSex,pBloodGroup
								FROM request,patient 
								WHERE request.pId=patient.pId';
								
								$result = mysqli_query($connection,$query);
								if(mysqli_num_rows($result)>0){
									while ($row = mysqli_fetch_array($result)) {
										echo '<div class="align-row row-3">
											<div class="float-left col">'.$row['pFName'].' '.$row['pLName'].'</div>';
										echo '<div class="float-center col">'.$row['pSex'].'</div>';
										echo '<div class="float-right col"><span class="red-text">'.$row['pBloodGroup'].' </span><a href="./requestInfo.php?pass='.$row['rid'].'"><i class="fas fa-info-circle margin"></i></a></div></div>';
										echo "<br>";
									}
								}
								else{
									echo"0 ";
								}
							?> 	