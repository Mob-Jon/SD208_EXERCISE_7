<?php
       include('validation.php');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- BOOTSTRAP CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- FONT ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- FONT-FAMILY -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Register to create account</title>
    <style>
        body{
        font-family: 'Poppins', sans-serif;
        /* background-color:#364f6b; */
        background-image:url('https://www.creativeclique.co.za/wp-content/uploads/2019/01/Ridge-Design-Website-Design-Background.jpg');
        background-size:cover;
        background-repeat:no-repeat;
        background-attachment:fixed;
}
.sign-up-form{
    background-color: white;
    min-height: 45vw;
    border-radius: 6px;
    box-shadow:2px 6px 15px 3px ; 
}
.sign-up-form form{
    margin-top: 3vw;
    margin-left: 2vw;
    margin-right: 2vw;
}
.sign-up-form button{
    background-color: #f18d9e;
    border-radius: .3vw;
    color: aliceblue;
    margin-top:-1vw;
}
.sign-up-form button:hover{
    color: white;
    background: #fc5185;
}
.form-header{
    text-align: center;
    color: white;
    background-color:#f18d9e;
    margin-top: -19px;
    padding-bottom: 1.5vw;
    padding-top: 2vw;
}
.form-control{
    min-height: 37px;
}
.input-group{
    margin-bottom: 30px;
}
.input-group-text{
    background-color: black;
}
label[class="checkbox-inline"]{
    color: #fc5185;
}
label[class="checkbox-inline"] a{
    color: red;
    text-decoration-line: none;
}
label[class="checkbox-inline"] a:hover{
    color: black;
}
.container{
    padding-left:10%;
    padding-right:10%;
}
    </style>
</head>
<body class="bg-info">
    <div class="container mt-5">
        <div class="sign-up-form justify-content-center">
            <div class="form-header">
                <span><img src="https://img.icons8.com/nolan/100/edit-user-male.png"/></span>
                <h2>Register</h2>
                <p>Register to create account</p>
            </div>

            <form action="" method="post">
                <div class= "input">
                    <div class="row">
                        <div class="col-sm">
                            <div class="input-group">
                                <span class="font-italic" style="color:red;font-size:14px;">
                                    <?php echo $errorName;?>
                                </span>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user text-warning" style="font-size:25px" aria-hidden="true"></i></span>
                                </div>
                                <input name="first_name" autocomplete="off" placeholder="Enter First name" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="input-group">
                                <span class="font-italic" style="color:red;font-size:14px;">
                                    <?php echo $errorLast;?>
                                </span>
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user text-warning" style="font-size:25px" aria-hidden="true"></i></span>
                                </div>
                                <input name="last_name" autocomplete="off" placeholder="Enter Last name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="input-group">
                                <span class=" font-italic" style="color:#f72a31;font-size:15px;">
                                    <?php echo $errorEmail;?>
                                </span>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope text-warning" style="font-size:20px" aria-hidden="true"></i></span>
                                </div>
                                <input name="email" autocomplete="off" placeholder="Enter email address" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-address-card text-warning" style="font-size:25px" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" name="address" autocomplete="off" placeholder="Enter Address" class="form-control">
                            </div>
                        </div>
                    </div>
                        <div class="input-group ">
                            <span class="font-italic" style="color:red;font-size:14px;">
                                <?php echo $errorName;?>
                            </span>
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user text-warning" style="font-size:25px" aria-hidden="true"></i></span>
                            </div>
                            <input name="password" type="password" autocomplete="off" placeholder="Enter password" class="form-control">
                        </div>
                </div>
                <div class="input-group mt-4">
                    <label class="checkbox-inline">
                        <input type="checkbox" required> I accept the <a href="#">Terms of Use</a>
                        &amp;
                        <a href="#">Privacy Policy</a>
                    </label>
                </div>
                <div class= "text-center">
                    <button type="submit" class="btn btn-lg btn-block mb-5" name="register_button">Create Account</button>
                </div>
            </form>
            <!-- <div class="foot">
                <p style="color:#03b9e6" class="text-center mt-4">Already have an account? <a href="login.php"><b>Click Here</b></a></p>  
            </div> -->
        </div>
        
    </div>
    
    
</div>
</body>
</html>