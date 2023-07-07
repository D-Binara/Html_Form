<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Test Form</title>
    </head>

    <body>
        <h1>Fill this form</h1>

        <form method="get">
            <label for="fname">First Name</lable><br>
            <input type="text" id="fname" name="fname" ><br>
            <label for="lname">Last Name</lable><br>
            <input type="text" id="fname" name="lname"><br>
        </form>
        

        <?php
            $fname="";
            $lname="";

            if(isset($_GET["fname"])){
                $fname = $_GET["fname"];
                } 
            
            if(isset($_GET["lname"])){
                $lname = $_GET["lname"];
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

              
            $sql = "INSERT INTO user_details (First_Name,Last_Name)
                        VALUES ('$fname', '$lname')";
                        

            if ($conn->query($sql) === TRUE) {
             echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $conn->close();
        ?>
        
    </body>
</html>