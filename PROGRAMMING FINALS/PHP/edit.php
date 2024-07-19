<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST['SUBMIT'])) {
      $first_name = $_POST["FirstName"];
      $last_name = $_POST["LastName"];
      $full_address = $_POST["FullAddress"];
      $email_address = $_POST["EmailAddress"];
      $phone_number = $_POST["PhoneNumber"];
      $instrument = $_POST["Instrument"];
      $quantity = $_POST["Quantity"];
      $brand = $_POST["Brand"];

      
      $sql = "UPDATE `customerorders` SET `FirstName`='$first_name', `LastName`='$last_name', `FullAddress`='$full_address',  `EmailAddress`='$email_address', `PhoneNumber`='$phone_number', `Instrument`='$instrument',  `Quantity`='$quantity', `Brand`='$brand',  WHERE id='$id'";
      $result = mysqli_query($conn, $sql);

      if ($result) {
        header("Location: index.php?msg=UPDATE SUCCESFULLY!");
      } else {
        echo "Failed: " . mysqli_error($conn);
      }
    }
    
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/form.css">
    <title>JP Sax Instrumental</title>
</head>
<body>

    <?php
    $sql = "SELECT * FROM `customerorders` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <form action="" method="post" class="form">
   
        <p class="title">CUSTOMER INFORMATION </p>
        <div class="flex">
            <label>
            <input style="width: 250px;" type="text" required=" " class="input" placeholder=""  name="FirstName" value="<?php echo $row['FirstName'] ?>">

                <span>Firstname:</span>
            </label>
    
            <label>
            <input style="width: 227px;" type="text" required=" " class="input" placeholder=""  name="LastName" value="<?php echo $row['LastName'] ?>">
                <span>Lastname:</span>
            </label>
        </div>  

            <label>
            <input type="text" required=" " class="input" placeholder=""  name="FullAddress" value="<?php echo $row['FullAddress'] ?>">

            <span>Full Address:</span>
        </label>
                
        <label>
            <input type="text" required=" " class="input" placeholder=""  name="EmailAddress" value="<?php echo $row['EmailAddress'] ?>">
            <span>Email Address:</span>
        </label> 
            
        <label>
             <input type="text" required=" " class="input" placeholder=""  name="PhoneNumber" value="<?php echo $row['PhoneNumber'] ?>">
            <span>Phone Number:</span>
        </label>


        
     
        <label class="lb" for="instrument">Select Instrument:</label>
        <select id="instrument" name="Instrument" required>
            <option value="soprano">Soprano</option>
            <option value="alto">Alto</option>
            <option value="tenor">Tenor</option>
            <option value="baritone">Baritone</option>
        </select>


        <label style="color: white;" class="lb" for="quantiy">Qauntity:</label>
        <input type="number" required=" " class="input" placeholder="Qty"  name="Qty" value="<?php echo $row['Quantity'] ?>">

        <label class="lb" for="brand">Select Brand:</label>
        <select id="brand" name="Brand" required>
            <option value="yamaha">Yamaha</option>
            <option value="vandoreen">Vandoreen</option>
            <option value="suzuki">Suzuki</option>
            <option value="selmer">Selmer</option>
            <option value="remo">Remo</option>
            <option value="king">King</option>
            <option value="conn">Conn</option>
            <option value="lidmig">Lidmig</option>
            <option value="zoom">Zoom</option>
            <option value="zildjian">Zildjian</option>
        </select>
      
       
        <button name="SUBMIT" value="submit" class="submit">
            <a href="edit.php">SUBMIT</a>
        </button>
        
    </form>
</body>
</html>

