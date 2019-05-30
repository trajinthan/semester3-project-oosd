<?php include('send-server.php') ?>

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
                    
                    <div class="isa_info">
                        <p>You will receive an email with verification code from <b> betatestersuom@gmail.com </b></p>
                        <br>               
                        <p> Enter the code in next page </p>
                        
                    </div>

                    <form method="post" action="send.php" id="verify-email">
                        
                        <?php include('errors.php') ?>
                        <!-- Submit button -->
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="send_mail">Send email</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>