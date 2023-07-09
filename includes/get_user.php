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

 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn->connect_error) {
     
 }

$sql="SELECT * FROM user_details WHERE ID='$id'";

$res = mysql_query($sql);

while ($result = mysql_fetch_array($res)) {
    $details =$result['First name'];
    echo "<br />";
}

if ($conn->query($sql) === TRUE) {
    
} else {
    echo $conn->error;
}

$conn->close();

header("Location: /HTML_Form/htmlform.php?details=$details");
?>