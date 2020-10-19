<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "registered_users") 
        or die ("Connection was not established");

$sql = "SELECT first_name, last_name, user_email,user_address FROM users";
$_SESSION['results'] = mysqli_query($con,$sql);
    if(isset($_POST['delete'])){
        $_SESSION['change'] = $_POST['name_change'];
        $sql_del = "DELETE FROM users WHERE first_name = '".$_SESSION['change']."'";
        $result_del = mysqli_query($con,$sql_del);

        if($result_del == TRUE){
            echo "<script>alert('Successfully Deleted')</script>";
            echo"<script>window.open('database_table.php', '_self')</script>";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- FONT ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- FONT-FAMILY -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <title>Tables- DATABASE</title>
        <style>
            body{
                font-family:'Poppins';
                /* background-color:#5bcbac; */
                background-image:url('https://orcharddesigns.com/wp-content/uploads/2017/05/web-design-background-image.jpg');
                background-size:cover;
                background-repeat:no-repeat;
                background-attachment:fixed;
            }
            h1{
                color:white;
            }
            table th{
                color:white;
                font-size: 17px;
            }
            .justify-content-center{
                background-color:white;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <h1 class="text-center mt-3"><b>Database List</b></h1>
        <div class="justify-content-center table-responsive mt-5">
        <table class="table table-borderless table-hover table-striped">
            <tr style="background-color:#f18d9e">
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Address</th>
                <th>Address</th>
                <th></th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            <?php

            if(mysqli_num_rows($_SESSION['results']) > 0){
                while($row = mysqli_fetch_assoc($_SESSION['results'])){
            ?>
            <tr>
                <td><?php echo $row["first_name"];?></td>
                <td><?php echo $row["last_name"];?></td>
                <td><?php echo $row["user_email"];?></td>
                <td><?php echo $row["user_address"];?></td>
                <form action="" method="post">
                    <td><input type="hidden" name="name_change" value="<?php echo $row["first_name"];?>"></td>
                    <td><button type="submit" name="delete" class="btn btn-warning">Delete</button></td>
                    <td><a href="update_form.php?user_email=<?php echo $row["user_email"]; ?>" class="btn btn-info">Update</a></td>
                    <!-- <td><button type="submit" name="update" class="btn btn-info">Update</button></td> -->
                </form>
            </tr>
                <?php }}
                else{
                    echo"<script>alert('0 results')</script>";
                    }
                ?>
        </table>
        </div>
        </div>
    </body>
</html>