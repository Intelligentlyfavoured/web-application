
<?php

require_once('Database_class.php');
$query="Select * from supplier";
$result=mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>SUPPLIER DETAILS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
<style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url("https://img.freepik.com/free-photo/medicine-capsules-global-health-with-geometric-pattern-digital-remix_53876-126742.jpg?w=2000");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .table-container {
            width: 100%;
            max-width: 800px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        table {
            width: 100%;
            font-size: large;
            border-collapse: collapse;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 3rem;
            font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', 'sans-serif';
            margin-bottom: 30px;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #002752; /* Blue header */
            color: #fff;
            font-weight: bold;
            border: none;
        }

        tr:nth-child(even) {
            background-color: #e6f7ff; /* Light blue for even rows */
        }

        tr:nth-child(odd) {
            background-color: #ffffff; /* White for odd rows */
        }

        td a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        td a:hover {
            color: #0056b3;
            text-decoration: underline;
        }
    </style>

 
    </head>
    <body class="bg-dark">
        <div class="container">
          <div class="row mt-5">   
            <div class="col">
                <div class="card mt-5">
                     <div class="card-header">
                         <h1 >CONTRACTS</h1>
                         
                            </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                           
                            <tr  class="big-dark text-white">
                                <th>Contractor's Name</th>
                                <th>Contractor's Id</th>
                                <th>Contract Number</th>
                               <th>Address</th>
                                <th>Phone Number</th>
                              <th>Medicine Code</th>
                              <th>Edit</th>
                              <th>Delete</th>
                              
                            
                                  <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
                                 <tr>
                                    
                                    <td><?php echo $rows['SupplierName'];?></td>
                                    <td><?php echo $rows['SupplierID'];?></td>
                                     <td><?php echo $rows['ContractNo'];?></td>
                                    <td><?php echo $rows['Address'];?></td>
                                    <td><?php echo $rows['PhoneNo'];?></td>
                                    <td><?php echo $rows['MedCode'];?></td>
                                     <td><a href="Supplier_edit.php?id=<?php echo $rows['SupplierID']; ?>">Edit</a></td>
                                <td><a href="Supplier_delete.php?id=<?php echo $rows['SupplierID']; ?>">Delete</a></td>
                                  
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

                                    
                                    
                             
                             
                             
                             



                                
git checkout <Supplier_display.php>  ;                             
                                
                                
                                
                                
                                
                                
                         
                                
                            
                            
                            
                            
                            
                            
                            
                            
                      
                            
                        
                        
                        
                        
                        
   