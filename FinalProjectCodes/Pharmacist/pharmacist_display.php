
<?php

require_once('Database_class.php');
$query="Select * from pharmacist";
$result=mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHARMACIST DETAILS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="tableStyles.css">
 
    </head>
    <body class="bg-dark">
        <div class="container">
          <div class="row mt-5">   
            <div class="col">
                <div class="card mt-5">
                     <div class="card-header">
                         <h1 >PHARMACIST DETAILS</h1>
                         
                            </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                           
                            <tr  class="big-dark text-white">
                                <th>Full Name</th>
                                <th>Pharmacist Number</th>
                               <th>Email Address</th>
                                <th>Phone Number</th>
                                   <th>Delete</th>
                             
                             
                             
                              
                            
                                  <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
                                 <tr>
                                    
                                    <td><?php echo $rows['FullName'];?></td>
                                    <td><?php echo $rows['Pharmacist Number'];?></td>
                                    <td><?php echo $rows['Email Address'];?></td>
                                    <td><?php echo $rows['Phone Number'];?></td>
                                   <td><a href="pharmacist_delete.php?id=<?php echo $rows['Pharmacist Number']; ?>">Delete</a></td>
                                   
                                  
                                    </tr>
                                    <?php
                                   
                                    
                                   }
                                    
                                    ?>
                                    
                                      </table>
                                                
                        
                    </div>
                      </div>
                  </div>
                </div>
              </div>
         
                        
    </body>
</html>

                                    
                                    
                             
                             
                             
                             



                                
                                
                                
                                
                                
                                
                                
                                
                         
                                
                            
                            
                            
                            
                            
                            
                            
                            
                      
                            
                        
                        
                        
                        
                        
   