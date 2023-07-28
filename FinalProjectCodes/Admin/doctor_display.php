
<?php

require_once('Database_class.php');
$query="Select * from doctor";
$result=mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>DOCTOR DETAILS</title>
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
                         <h1 >DOCTOR DETAILS</h1>
                         
                            </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                           
                            <tr  class="big-dark text-white">
                                <th> Name</th>
                                <th>Speciality</th>
                               <th>Email_Address</th>
                                <th>Phone </th>
                              <th>Address</th>
                            
                              
                            
                                  <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
                                 <tr>
                                    
                                    <td><?php echo $rows['Name'];?></td>
                                    <td><?php echo $rows['Speciality'];?></td>
                                    <td><?php echo $rows['Email_Address'];?></td>
                                    <td><?php echo $rows['Phone'];?></td>
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

                                    
                                    
                             
                             
                             
                             



                                
                                
                                
                                
                                
                                
                                
                                
                         
                                
                            
                            
                            
                            
                            
                            
                            
                            
                      
                            
                        
                        
                        
                        
                        
   