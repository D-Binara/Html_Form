<?php
$fname = "";
$lname = "";
$address = "";
$id = "";

if (isset($_POST["fname"])) {
    $fname = $_POST["fname"];
}

if (isset($_POST["lname"])) {
    $lname = $_POST["lname"];
}

if (isset($_POST["address"])) {
    $address = $_POST["address"];
}

if (isset($_POST["id"])) {
    $id = $_POST["id"];
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "html_form_db";

$status = true;
$error = null;

try {

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        $error = $conn->connect_error;
    }

    //SQL query  
    $sql = "INSERT INTO user_details (First_Name,Last_Name,address_,ID)
                        VALUES ('$fname', '$lname','$address','$id')";



    if ($conn->query($sql) === TRUE) {
        //TODO
    } else {
        $status = false;
        $error = $conn->error;
    }

    $conn->close();

}
catch(Exception $e){
    $status = 0;
    $error = $e->getMessage();
}


header("Location: /HTML_Form/htmlform.php?success=$status&name=$fname&error=$error");