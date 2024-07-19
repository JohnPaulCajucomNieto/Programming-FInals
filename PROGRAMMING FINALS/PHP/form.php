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
   
    <form  action="../PHP/process_form.php" method="post" class="form">
        <p class="title">CUSTOMER INFORMATION </p>
        <div class="flex">
            <label>
                <input style="width: 250px;" class="input" type="text" placeholder="" required="" name="Firstname">
                <span>Firstname:</span>
            </label>
    
            <label>
                <input style="width: 227px;" class="input" type="text" placeholder="" required="" name="Lastname">
                <span>Lastname:</span>
            </label>
        </div>  

        <label>
            <input class="input" type="text" placeholder="" required="" name="FullAddress">
            <span>Full Address:</span>
        </label>
                
        <label>
            <input class="input" type="text" placeholder="" required="" name="EmailAddress">
            <span>Email Address:</span>
        </label> 
            
        <label>
            <input class="input" type="text" placeholder="" required="" name="PhoneNumber">
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
        <input type="number" placeholder="Qty" name="Qty" class="box">
    

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
      
        <button name="SUBMIT" value="Submit" class="submit">SUBMIT</button>
        
    </form>
</body>
</html>