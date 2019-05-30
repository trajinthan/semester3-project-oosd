<?php
//Connection for database

$conn=mysqli_connect("localhost", "root","","asesment");

$id = $_SESSION['id'];
$sql = "SELECT * FROM user_database WHERE id=$id";
$result = $conn->query($sql);
?>
<!doctype html>
<html>
<body>

<?php
//Fetch Data form database
if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
<div class="profile">
<?php echo "Firstname : ",$row['firstname']; ?>
<br>
<?php echo "Lastname : ",$row['lastname']; ?>
 <br>
<?php echo"Email : ", $row['email']; ?>
 <br>
 </div>

 <div class="b"><a href="edit.php?edit_id=<?php echo $row['id']; ?>" alt="edit" >Edit</a></div>
 
 <?php
 }
}

 ?>
</body>
</html>

<style>
    .profile{
    font-size:20px;
    text-align:left;
    font-family: serif,sans-serif;
}
.b{
   
    text-align:center;
    
    /* background-color: gray; */
    border: solid rgb(39, 63, 90) 1px;
    width:5%;
    border-radius:8%;
    font-family: serif,sans-serif;
    font-size:17px
}
</style>