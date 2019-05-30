<?php $pagetitle = "grade"; ?>

<?php include('heading.php');?>




<html>
<body>
<div class='container'>
<div class='row'>
<div class='col-md-12'> 
			<div class='myshadow'>
			<h1 class='red border-bottom color'><p style="text-align:left">Grade Assignment</p></h1>
			 
			 </div>
</div>
</div>
</div>


<div class='container'>
<div class='row'>
<div class='col-md-12'> 
			<div class='myshadow'>
<form method="post">
<label>Feedback:</label><textarea name='feedback' style="resize:none" rows="3" placeholder="Enter feed back" class='form-control' ></textarea>
<br>
<label>Grade:</label><textarea name="score" style="resize:none" rows="1" placeholder="score"></textarea>
<br>
<br>
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