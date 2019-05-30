<?php include('email-server.php') ?>

<!DOCTYPE html>
<head>
    <!-- Title Page-->
    <title>Register</title>

    <!-- page icon -->
    <link rel="icon" type="icon" href="images/add_user.png">

    <!--CSS-->
    <link href="css/register.css" rel="stylesheet" media="all">
    <link href="css/report.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-color p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">First things first!</h2>
                    <form method="post" action="email.php" id="register-email">
                        <?php include('errors.php') ?>
                        
                        <!-- Email -->
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="CSE email" name="email" value="<?php echo $email; ?>">
                        </div>

                        <!-- Password -->
                        <div class="input-group">
                            <input id="password" class="input--style-1" type="password" placeholder="Password" name="password_1">
                        </div>
                        
                        <!-- Confirm password -->
                        <div class="input-group">
                                <input class="input--style-1" type="password" placeholder="Confirm Password" name="password_2">
                        </div>

                        <!-- Submit button -->
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="reg_user">Next</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>