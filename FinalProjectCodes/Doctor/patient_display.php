
<?php

require_once('Database_class.php');
$query="Select * from patients";
$result=mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PATIENTS DETAILS</title>
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
                         <h1 >PATIENTS DETAILS</h1>
                         
                            </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                           
                            <tr  class="big-dark text-white">
                                <th>Patient Name</th>
                                <th>Patient Number</th>
                               <th>Email Address</th>
                                <th>Phone Number</th>
                              <th>Address</th>
                             
                             
                              
                            
                                  <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
                                 <tr>
                                    
                                    <td><?php echo $rows['Patient Name'];?></td>
                                    <td><?php echo $rows['Patient Number'];?></td>
                                    <td><?php echo $rows['Email Address'];?></td>
                                    <td><?php echo $rows['Phone Number'];?></td>
                                    <td><?php echo $rows['Address'];?></td>
                                   
                                  
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

                                    
                                    
                             
                             
                             
                             



                                
                                
                                
                                
                                
                                
                                
                                
                         
                                
                            
                            
                            
                            
                            
                            
                            
                            
                      
                            
                        
                        
                        
                        
                        
   