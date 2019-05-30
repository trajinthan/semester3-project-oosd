<?php include('forgot_password-server.php') ?>

<!DOCTYPE html>
<head>
    <!-- Title Page-->
    <title>Forgot Password</title>

    <!-- page icon -->
    <link rel="icon" type="icon" href="images/login.png">

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
                    <h2 class="title">Let us get you back on track</h2>

                    <div class="isa_info">
                        <STRONG> Enter your email below </STRONG>
                    </div>

                    <form method="post" action="forgot_password.php" id="forgot_password">
                        <?php include('errors.php') ?>
                        
                        <!-- Email -->
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="CSE email" name="email">
                        </div>

                        <!-- Submit button -->
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="forgot_password">Next</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>