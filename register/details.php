<?php include('details-server.php') ?>

<!DOCTYPE html>
<head>
    <!-- Title Page-->
    <title>Details</title>

    <!-- Icons font CSS-->
    <link rel="icon" type="icon" href="images/user_details.png">

    <!-- Fonts for pages-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/register.css" rel="stylesheet" media="all">
    <link href="css/report.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Let's get your details</h2>
                    <form method="POST" action="details.php">
                        <?php include('errors.php') ?>
                        
                        <!-- First Name -->
                        <div class="input-group">
                                <input class="input--style-1" type="text" placeholder="First Name" name="firstname">
                        </div>

                        <!-- Last Name -->
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Last Name" name="lastname">
                        </div>
                        
                        <!-- ID -->
                        <div class="input-group">
                                <input class="input--style-1" type="text" placeholder="University ID" name="id">
                        </div>

                        <!-- Lecturer/Student -->
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="class">                                    
                                    <option value="Student">I'm a Student</option>
                                    <option value="Lecturer">I'm a Lecturer</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="reg_user">Register Me</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>
</html>