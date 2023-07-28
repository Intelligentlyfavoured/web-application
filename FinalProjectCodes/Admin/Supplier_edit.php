<?php
// Check if the SupplierID is provided in the URL
if (isset($_GET['id'])) {
    $supplierID = $_GET['id'];
    
    require_once 'Database_Class.php';
   // print_r($_POST);
    
    // Retrieve the supplier information based on the provided SupplierID
    $query = "SELECT * FROM supplier WHERE SupplierID = '$supplierID'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Display the form to edit the supplier information
        ?>

        <!DOCTYPE html>
        <html>
        <head>
            <title>Edit Contract</title>
     
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh; /* Ensure the body takes at least the full viewport height */
            background-image: url("https://img.freepik.com/free-photo/medicine-capsules-global-health-with-geometric-pattern-digital-remix_53876-126742.jpg?w=2000");
        }
        h1 {
            color: #008080;
            text-align: center; /* Center the heading horizontally */
            margin-top: 30px; /* Add some top margin to the heading */
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            border: 1px solid #ccc; /* Adding the border property */
            padding: 20px; /* Adding some padding to create space between the border and form elements */
            border-radius: 4px; /* Adding rounded corners to the border */
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #008080;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #006666;
        }
    </style>
        </head>
        <body>
            <h1>Edit Contract</h1>
            <form action="update.php" method="POST">
                <input type="hidden" name="supplierID" value="<?php echo $row['SupplierID']; ?>">
                <label for="supplierName">Supplier Name:</label>
                <input type="text" id="supplierName" name="supplierName" value="<?php echo $row['SupplierName']; ?>" required><br><br>
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="<?php echo $row['Address']; ?>" required><br><br>
                <label for="phoneNumber">Phone Number:</label>
                <input type="text" id="phoneNumber" name="phoneNumber" value="<?php echo $row['PhoneNo']; ?>" required><br><br>
                <label for="medicineCode">Medicine Code:</label>
                <input type="text" id="medicineCode" name="medicineCode" value="<?php echo $row['MedCode']; ?>" required><br><br>
                <input type="submit" value="Update">
            </form>
        </body>
        </html>

        <?php
    } else {
        echo "Supplier not found.";
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    echo "Invalid SupplierID.";
}
?>
