<?php
//Connection for database

$conn=mysqli_connect("localhost", "root","","asesment");
$id = $_SESSION['id'];
    $sql="SELECT * FROM user_database WHERE id =$id";
    $result_set=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result_set)){
?>


<div class="profile">
<?php echo "Full Name:",$row['firstname']," ",$row['lastname']; ?>
 <br>
<?php echo"Email:", $row['email']; ?>
 <br>
</div>

<div class="b"><a href="editlec.php?edit_id=<?php echo $row['id']; ?>" alt="edit" >Edit</a></div>
 
 <?php
 }


 ?>
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