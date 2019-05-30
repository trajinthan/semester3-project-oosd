<?php
//CONNECT WITH DATABASE
    
$conn=mysqli_connect("localhost", "root","","asesment");
$id = $_SESSION['id'];
    $sql="SELECT * FROM submitted WHERE id=$id ";
    $result_set=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result_set))
    {
?>
    
        <tr>
        <td><?php echo $row['coursecode'] ?></td>
        <td><?php echo $row['title'] ?></td>
        <td><?php echo $row['description'] ?></td>
        
        <td><?php echo $row['uploaded_date']?></td>
        <td><a href="uploads/<?php echo $row['project'] ?>" target="_blank">view file</a></td>
        
        </tr>
        <?php
 }
 ?>