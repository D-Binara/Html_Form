<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <!--bootstrap CDN link-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Test Form</title>
    </head>

    <body>
        <h1>Fill this form</h1>

        <form class ="container" method="get">
            <!-- get user inputs--> 
            <div class="form-group">
                <label for="fname">First Name</lable><br>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name"><br>
            </div>
            <div class="form-group">
                <label for="lname">Last Name</lable><br>
                <input type="text"  class="form-control" id="lname" name="lname" placeholder="Last Name"><br>
            </div>
            <div class="form-group">
                <label for="address">Address</lable><br>
                <input type="text" class="form-control" id="address" name="address" placeholder="Address"><br>
            </div>
            <div class="form-group">
                <label for="id">ID</lable><br>
                <input type="text" class="form-control" id="id" name="id" placeholder="ID"><br>
            </div>
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
             echo "<br>.New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $conn->close();
        ?>
        
    </body>
</html>