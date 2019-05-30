<?php $pagetitle = "lecturer"; ?>

<?php include('heading.php');?>



<div class='container'>
<div class='row'>
<div class='col-md-12'> 
			<div class='myshadow'>
			<h1 class='red border-bottom color'><p style="text-align:left">Lecturer Profile</p></h1>
			 

			</div>


		</div>
</div>
</div>
<div class='container'>
<p style="text-align:left"><?php include('lecturerprofile.php');?></p>
</div>



<div class='container' >
	<div class='row'>


		<div class='col-md-12 '>
			<div id='myshadow'>
			<h1 class='red border-bottom color'>Check Submissions</h1>
			

			</div>


		</div>




		

<div class='col-md-12 ' > 
	<div class='myshadow'>
			
		<div class=''>
				<form role="form" action='lec-check-ass.php' method='POST'>

					<div class="form-group">
					    <label>  Select Course code:   </label>
					    <select name="coursecode"  class='sml-margin'>
							<option value="">Select coursecode</option>
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
					   <button type="submit" class="btn btn-primary sml-margin" name='submit'>Check</button>
					   
					
				</form>
		</div>		 
					   

	</div>
	</div>

