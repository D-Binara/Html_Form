<?php
$id = "";


if (isset($_POST["id"])) {
    $id = $_POST["id"];
}

//Serever details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "html_form_db";

$status = true;
$error = null;


 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn->connect_error) {
    $error = $conn->connect_error;
 }

//SQL query  
$sql= "SELECT * FROM user_details  WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
    
} else {
    $status = false;
    $error = $conn->error;
}

$conn->close();

header("Location: /HTML_Form/htmlform.php?details=$sql&success2=$status&error2=$error");
?>