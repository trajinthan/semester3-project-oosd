<?php $pagetitle = "profile edit"; ?>

<?php include('heading.php');?>

<?php
//Database Connection
$conn=mysqli_connect("localhost", "root","","asesment");
//Get ID from Database
if(isset($_GET['edit_id'])){
 $sql = "SELECT * FROM user_database WHERE id =" .$_GET['edit_id'];
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);
}
//Update Information
if(isset($_POST['btn-update'])){
 $firstname = $_POST['firstname'];
 $lastname=$_POST['lastname'];
 
 $email = $_POST['email'];
 $update = "UPDATE user_database SET firstname='$firstname',lastname='$lastname',email='$email' WHERE id=". $_GET['edit_id'];
 $up = mysqli_query($conn, $update);
 if(!isset($sql)){
 die ("Error $sql" .mysqli_connect_error());
 }
 else
 {
 header("location: student-home.php");
 }
}
?>
<!-- Create Edit form -->

<html>
<body>
<div class='container'>
<div class='row'>
<div class='col-md-12'> 
			<div class='myshadow'>
			<h1 class='red border-bottom color'><p style="text-align:left">Edit Profile</p></h1>
			 </div>

</div>
</div>
</div>

<div class='container'>
<div class='row'>
<div class='col-md-12'> 
			<div class='myshadow'>
<form method="post">

<label>FirstName:</label><input type="text" name="firstname" placeholder="firstname" value="<?php echo $row['firstname']; ?>"><br/><br/>
<label>LastName:</label><input type="text" name="lastname" placeholder="lastname" value="<?php echo $row['lastname']; ?>"><br/><br/>
<label>Email:</label><input type="text" name="email" placeholder="email" value="<?php echo $row['email']; ?>"><br/><br/>

<button type="submit" name="btn-update" id="btn-update" onClick="update()"><strong>Update</strong></button>
<a href="student-home.php"><button type="button" value="button">Cancel</button></a>
</form>
        </div>
    <div>
</div>
</div>
<!-- Alert for Updating -->
<script>
function update(){
 var x;
 if(confirm("Data Updated Sucessfully") == true){
 x= "update";
 }
}
</script>
</body>
</html>


<html>
	<style>
.myshadow{
	border-right: 1px solid #cfcfcf;
	box-shadow: 0px 1px 1px 0px black;
	
	margin-top: 10px;
	padding-left: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
	background: rgb(250, 250, 245);
	border-radius: 3px;
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0;
	padding-top: 1px;

}

.col-md-12{
	padding-left: 6px;
	padding-right: 7px;
}
.row {
  margin-right: -20px;
  margin-left: -20px;
  }
</style>