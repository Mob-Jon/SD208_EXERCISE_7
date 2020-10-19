<?php
    // include('sd208_exercise_4-1.php');
    $con = mysqli_connect("localhost", "root", "", "registered_users") 
                or die ("Connection was not established");
    $errorName = " ";
    $errorLast = " ";
    $errorEmail =" ";
    $inputFirstName = " ";
    $inputLastName = " ";
    $inputEmail = " ";
    $inputAddress = " ";
    
    /////INSERT DATA AFTER SUBMIT
    if(isset($_POST['register_button'])){
       
        $firstNameLength = strlen($_POST['first_name']);
        $lastNameLength = strlen($_POST['last_name']);
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $inputAddress = $address;
        $password = $_POST['password'];

            if( $firstNameLength <= 25 and $firstNameLength >= 2){
                $inputFirstName = ucwords($_POST['first_name']);
            } 
            else {
                $errorName = "* Name should at least 2 characters and not exceed 25 characters!";
            }
            if($lastNameLength <= 25 and $lastNameLength >= 2){
                $inputLastName = ucwords($_POST['last_name']);
            }
            else {
                $errorLast = "* Name should at least 2 characters and not exceed 25 characters!";
            }
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errorEmail = "* Invalid email format";
            }
            else {
                $inputEmail = $email;
            }
            $insert = "INSERT INTO users(first_name, last_name, user_email, user_address, user_password) 
                        VALUES('$firstName','$lastName','$email','$address', '$password')"; 
            
            $query = mysqli_query($con, $insert);
    
            if($query){
                echo"<script>alert('Congratulations $firstName, data has been Successfully added')</script>";
                echo"<script>window.location = 'database_table.php'</script>";

            }else{
                echo"<script>alert('Registration Failed, Please try again!')</script>";
                echo"<script>window.open('sd208_exercise_7-1.php')</script>";

            }   
    }
    mysqli_close($con);
?>