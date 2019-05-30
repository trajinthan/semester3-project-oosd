<?php include('verify-server.php') ?>
<!DOCTYPE html>

<head>
    <!-- Title Page-->
    <title>Verify Email</title>

    <!-- page icon -->
    <link rel="icon" type="icon" href="images/email-verification.png">

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
                    <h2 class="title">Lets get your email verified</h2>
                    <form method="post" action="verify.php" id="verify-email">    
                        <?php include('errors.php') ?>

                        <!-- verification code -->
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Enter verification code" name="user_code">
                        </div>

                        <!-- Submit button -->
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="email_confirm">Next</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>