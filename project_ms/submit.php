<?php $pagetitle = 'Submit assignment'; ?>

<?php include('heading.php');?>


<div class='container'>
<div class='row'>
<div class='col-md-12 '>
			<div id='myshadow'>
			<h1 class='red border-bottom color'>Submit your Project</h1>
		

			</div>


		</div>

</div>
</div>






<?php 
$error='';
if (isset($_POST['submit'])) {



		function sanitizeVariable($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
   }


		$lecturer = sanitizeVariable($_POST['lecturer']);
		$title = sanitizeVariable($_POST['title']);
		$coursecode = sanitizeVariable($_POST['coursecode']);
		$description = sanitizeVariable($_POST['description']);
		$project=rand(1000,10000)."-".$_FILES['myfile']['name'];
		$tname=$_FILES['myfile']['tmp_name'];
		
		 #SET PATH TO SAVE UPLOADED FILE
		 $uploads_dir='C:\xampp\htdocs\project_ms\uploads';

		 move_uploaded_file($tname,$uploads_dir.'/'.$project);

		if (!empty($lecturer) && !empty($title) && !empty($coursecode)  && !empty($description)) {
			//check if the lecturer matches the course selected 

		 
			
			$id = $_SESSION['id'];
			$time =   date("h:i:sa");
			$score= 0;

			$query = 'INSERT INTO submitted(lecturer, id, title, coursecode, score, description, project) VALUES(:lecturer, :id, :title, :coursecode, :score, :description, :project)';
			$query = $conn -> prepare($query);
			$query -> bindParam(':lecturer', $lecturer);
			$query -> bindParam(':coursecode', $coursecode);
			$query -> bindParam(':title', $title);
			$query -> bindParam(':id', $id);
			$query -> bindParam(':description', $description);
			$query -> bindParam(':project', $project);
			$query -> bindParam(':score', $score);
		
			$query -> execute();


			if ($query) {
			// tell the person he has successfully submitted his assignment using jquery
				$error = 'Project  submitted successfully';
				
			}
			else{
				$error = 'Project  not submitted. Try again later';
				//try again assignment not submitted

			}	

			


		}

	else{
		$error = 'Fill all the datas to continue';
	}

}







?>

<div class='container'>
<div class='row'>
	<div class='col-md-12 ' > 
		<div class='myshadow'>
		
		<div class='assform'>
				<form role="form" method='post' enctype='multipart/form-data'>
          	<div class='error'><?php echo $error; ?></div>

          	<?php
          	$query = 'SELECT * FROM user_database WHERE class="Lecturer" ';
          	$query = $conn -> prepare($query);
			$query -> bindParam(':lecturer', $lecturer);
			$query -> execute();
			$res = $query-> fetch(PDO::FETCH_ASSOC);
			$uses = $res['firstname'];
			$namin = $res['firstname'];

          	?>
					  

					  <div class="form-group">
					    <label style='width:100px;'> Lecturer :  </label>
					    <select name="lecturer"  class='sml-margin'>
							<option value="">Select lecturer</option>
							
							<?php print" <option value='".$uses."'>".$namin."</option>"?>
							
							
						</select><br>
					  </div>


					  <div class="form-group">
					    <label style='width:100px;'> Course code:   </label>
					    <select name="coursecode"  class='sml-margin'>
							<option value="">Select module code</option>
							<option value="CS2963">CS2963-Presentation Skils</option>
							<option value="CS2202">CS2202-Programming Challenge 1</option>
							<option value="CS2150">CS2150-Graph Theory for Computing </option>
							<option value="CS2062">CS2062-Object Oriented Software Development</option>
							<option value="CS2032">CS2032-Principles of Computer Communication</option>
							<option value="CS2042">CS2042-Operating Systems</option>
							<option value="EN2022">EN2022-Digital Elecronics</option>
							<option value="CE1822">CE1822-Aspects of Civil Engineering</option>
						</select><br>
					  </div>



					  <div class="form-group">  
					    <label for="">Title</label>	
						<textarea name='title' style="resize:none" rows="1" placeholder="Enter project title" class='form-control' ></textarea>
						<label for="">Description</label>	
						<textarea name='description' style="resize:none" rows="3" placeholder="Enter Text" class='form-control' ></textarea>
						</div>
					
						<label>File Upload</label>
        		<input type="file"  name="myfile">
					    
					
					 <br>
					 <button type="submit" class="btn btn-danger" name='submit'>Submit</button>
					 <button><a href ="student-home.php">Cancel</a></button>
				</form>
		</div>
	</div>
	</div>


</div>
</div>



	
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
</style>
</html>