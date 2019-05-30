<?php $pagetitle = "Student Area"; ?>

<?php include('heading.php');?>

<link href="css/grp.css" rel="stylesheet">
<link href="css/work.css" rel="stylesheet">

<div class='container'>
<div class='row'>
<div class='col-md-12'> 
			<div class='myshadow'>
			<h1 class='red border-bottom color'><p style="text-align:left">Student Profile</p></h1>
			 

			</div>


		</div>
</div>
</div>


<div class='container'>
<p style="text-align:left"><?php include('studentprofile.php');?></p>
</div>
<?php include('left.php');?>




					   



		
		


<div class='container'>
<div class='row'>
<div class='col-md-12'> 
			<div class='myshadow'>
			<h1 class='red border-bottom color'><p style="text-align:left">Your Uploads....</p></h1>
			 

			</div>


		</div>
</div>
</div>
    
    <body>
    
    <div class="body">
	
    <table width="81%">
        <td><h3>module code<h3></td>
        <td><h3>project title<h3></td>
        <td><h3>project description<h3></td>
        <td><h3>submission date<h3></td>
		<td><h3>View</h3></td>
		
        <?php include ('displayuploads.php')?>
        </tr>
    
   
    </table>
	
    </div>
    </body>








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


  body
{
 
 font-family:Georgia;
 text-align:center;
 
}

.body
{
 margin-top:100px;
}
.body table
{
    margin:2px auto;
 position:relative;
 bottom:50px;
 background: rgb(250, 250, 245);
}
table td,th
{
 padding:20px;
 border: solid rgb(39, 63, 90) 2px;
 border-collapse:collapse;
}

table th{
	font-size:25px;
	
}

	

table td{
    font-size:20px;
}



</style>
</html>












