<?php 
session_start();
try {

    $pass='';
    $username='root';
    $conn = new PDO('mysql:host=localhost; dbname=asesment', $username, $pass);   
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully.</br>"; 
    }
catch(PDOException $e){
    echo "Connection failed: ";
    }
?>



<head>
<link href="css/grp.css" rel="stylesheet">
<link href="css/work.css" rel="stylesheet">

<title><?php print $pagetitle; ?></title>
</head>
<body>
	<hr>
    <header>
        <div class="mWrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-4">
            <div class="logo">
              PROJECT MANAGEMENT SYSTEM
            </div>
          </div>
          <div class="col-sm-8 col-md-8" style='padding-right:30px;'>
            <nav class="mainMenu">
              <ul class="nav">
              <li><a href=""><button class='btn'>Notifications</button></a></li>
                <li><a href="logout.php"><button class='btn btn-danger'>Logout</button></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>

    

	</header>
<hr>
<style>
.logo {
	padding: 0;
	min-height: 30px;
	font-size: 30px;
  color: rgb(204, 51, 51);
}

</style>	