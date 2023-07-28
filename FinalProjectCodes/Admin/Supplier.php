<?php
require_once("Database_class.php");
print_r ($_POST);
try{
    if($_SERVER["REQUEST_METHOD"]=="POST"){
$sname=$_POST["sname"];
$address=$_POST["address"];
$supplyID=$_POST["sid"];
$pno=$_POST["Phone_number"];
$medcode=$_POST["medcode"];

//$db>establishConnection();
$sql="INSERT INTO supplier(SupplierName, SupplierID, Address, PhoneNo, MedCode) 
        VALUES ('$sname','$supplyID','$address','$pno','$medcode')" ;

if($conn->query($sql)===TRUE){
echo "<script>alert('Data inserted successfully')</script>";
   // $db->closeConnection();
}
else{
echo "Error:".sql."<br>".$conn->error;
    //$db->closeConnection();
    }}
 } catch (Exception $ex) {
     echo "<script>alert('no connection')</script>";

}       
?>
