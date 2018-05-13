
<?php
		$s2='';
		
		if(isset($_POST['hideme'])){
		$s2=$_POST['s2'];	 
		 }
		 
		 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Summernote</title>
  
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
		<link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
   		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">     
		<link rel="stylesheet" href="animate/animate.css">	
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		
	    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
		
	<link rel="stylesheet" href="css/table.css">
	 <link href="note/summernote/bootstrap.css" rel="stylesheet">
  
  
  <link href="note/summernote/bootstrap.css" rel="stylesheet">
  <script src="note/summernote/jquery.js"></script> 
  <script src="note/summernote/bootstrap.js"></script> 
  <link href="note/summernote.css" rel="stylesheet">
  <script src="note/summernote.js"></script>
</head>
<body>
	
	
	
<form method="post">
  <textarea id="summernote" name="s2"></textarea>
  <button class="btn btn-primary" type="submit" name="hideme" >Go!</button> 
</form>

	<div class="container">
		<div class="row">
			<div class=" col-md-12  ">
			<?php echo $s2;  ?>
 			</div>
 
		</div>
	</div>

		<script src="bower_components/jquery/dist/jquery.min.js"></script>
		<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="dist/js/adminlte.min.js"></script>
		<script src="bower_components/jquery.slimscroll.min.js"></script>
		<script src="bower_components/fastclick.js"></script>
		
		
		<script src="bower_components/bootstrap-datepicker.min.js"></script>
		
		
		<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
		<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
	
	$('#summernote').summernote({
  height: 300,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: true                  // set focus to editable area after initializing summernote
});
  </script>
</body>
</html>