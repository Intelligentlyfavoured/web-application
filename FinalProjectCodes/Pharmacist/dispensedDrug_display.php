
<?php

require_once('Database_class.php');
$query="Select * from dispenseddrugs";
$result=mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>HISTORY OF DISPENSED DRUGS</title>
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
                         <h1 >HISTORY OF DISPENSED DRUGS</h1>
                         
                            </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                           
                            <tr  class="big-dark text-white">
                                <th>Patient Number</th>
                                <th>Medication Name</th>
                               <th>Dispensed Quantity</th>
                                <th>Payable Amount</th>
                              <th>Pharmacist Number</th>
                              <th>Dispensation Date</th>
                              <th>Receipt No</th>
                             
                              
                            
                                  <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
                                 <tr>
                                    
                                    <td><?php echo $rows['Patient Number'];?></td>
                                    <td><?php echo $rows['Medication Name'];?></td>
                                    <td><?php echo $rows['Dispensed Quantity'];?></td>
                                    <td><?php echo $rows['Payable Amount'];?></td>
                                    <td><?php echo $rows['Pharmacist Number'];?></td>
                                     <td><?php echo $rows['Dispensation Date'];?></td>
                                           <td><?php echo $rows['Receipt No'];?></td>
                                    
                                  
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

                                    
                                    
                             
                             
                             
                             



                                
                                
                                
                                
                                
                                
                                
                                
                         
                                
                            
                            
                            
                            
                            
                            
                            
                            
                      
                            
                        
                        
                        
                        
                        
   