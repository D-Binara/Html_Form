<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <!--bootstrap CDN link-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Test Form</title>
    </head>

    <body>
        <h1>Data Management System</h1>

        <h2 class="container">Enter your details</h2>

        <form action="/HTML_Form/includes/save_user.php" class ="container" method="POST">
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
            if(isset($_GET['success'])){
                $success = $_GET['success'];

                if($success){
                    echo "<div class=container><br>Form submited successfully</div>";
                }
                else{
                    echo "<div class=container><br>Failed</div>";
                }

            }
            
        ?>

        <br>
        <h2 class="container">Check your details</h2>

        <form action="/HTML_Form/includes/get_user.php" class="container" method="POST">
            <div class="form-group">
                <label for="get_details">Enter ID</lable><br>
                <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Enter your ID">
            </div>
            <div><br>
                <input type="Submit" value="Submit">
            </div>
        </form>

        <?php
        if(isset($_GET['full_name'])){
            $full_name = $_GET['full_name'];

            if($full_name){
                echo "<div class=container><br>$full_name</div>";
            }
            else{
                echo "<div class=container><br>Enter correct ID</div>";
            }
        }
        ?>

    </body>
</html>