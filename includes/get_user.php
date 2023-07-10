<?php
$id = "";


if (isset($_POST["user_id"])) {
    $id = $_POST["user_id"];
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

$result = $conn->query($sql);

$full_name = "";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $full_name = $row["First_Name"]. " " . $row["Last_Name"];
    }

} else {
    echo "0 records";
}

$conn->close();

header("Location: /HTML_Form/htmlform.php?full_name=$full_name");
?>