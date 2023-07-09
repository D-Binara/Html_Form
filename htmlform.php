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
                    echo "Form submited successfully";
                }
                else{
                    echo "Failed";
                }

            }
        ?>
    </body>
</html>