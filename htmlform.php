<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Test Form</title>
    </head>

    <body>
        <h1>Fill this form</h1>

        <form method="get">
            <!-- get user inputs--> 
            <label for="fname">First Name</lable><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Last Name</lable><br>
            <input type="text" id="lname" name="lname"><br>
            <label for="address">Address</lable><br>
            <input type="text" id="address" name="address"><br>
            <label for="id">ID</lable><br>
            <input type="text" id="id" name="id"><br>
            <!-- submit user input--> 
            <input type="submit" value="Submit">
        </form>
        

        <?php
            $fname="";
            $lname="";
            $address="";
            $id="";

            if(isset($_GET["fname"])){
                $fname = $_GET["fname"];
                } 
            
            if(isset($_GET["lname"])){
                $lname= $_GET["lname"];
                } 

            if(isset($_GET["address"])){
                $address = $_GET["address"];
                } 
        
            if(isset($_GET["id"])){
                $id = $_GET["id"];
                } 

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname="html_form_db";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password,$dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

            //SQL query  
            $sql = "INSERT INTO user_details (First_Name,Last_Name,address_,ID)
                        VALUES ('$fname', '$lname','$address','$id')";
                        

            if ($conn->query($sql) === TRUE) {
             echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $conn->close();
        ?>
        
    </body>
</html>