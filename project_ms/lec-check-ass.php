<?php $pagetitle = "Check Submitted assignment"; ?>


<?php include('heading.php');?>

<?php $mark = '';?>

<div class='container' >
	<div class='row'>
		<div class='col-md-12 '>
			<div id='myshadow'>
			<h1 class='red border-bottom color'>Check Submitted assignment</h1>
			
			</div>
		</div>


<?php 
$error='';
	if (isset($_POST['submit'])) {
			$coursecode = $_POST['coursecode'];
			
		$query = $conn->prepare("SELECT * FROM submitted WHERE coursecode = :coursecode && score=0");
		// $query -> bindParam(':lecturer', $lecturer);
		$query -> bindParam(':coursecode', $coursecode);
		$query->execute();		
		$hello = ($query->fetchAll());

			print "<div class='col-md-12'>
					<form action='lec-check-ass.php' method='post'>
					<table class='table table-bordered table-striped'>
					<thead><tr>   <td>STUDENT ID</td> <td>PROJECT TITLE</td> <td>PROJECT</td> <td>GRADE</td></tr></thead>
					<tbody>";
	}	
?>		 
<?php foreach ($hello as $value):?>
		
					 <tr><td> <?php echo $value['id']; ?></td>
					 <td> <?php echo $value['title']; ?></td>	
					 <td><a href="uploads/<?php echo $value['project']; ?>" target= "_blank">view file</a></td>
					
					<td><a href="grade.php?id=<?php echo $value['id']?>" >Grade Assignment</a></td> 
							</tr>
			
<?php endforeach;?>	

		
		
			
	


	
 







