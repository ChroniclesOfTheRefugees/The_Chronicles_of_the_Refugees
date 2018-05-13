
 <?php
 

$id = "";
$name = "";
$email = "";
$age = "";

 	

// connect to mysql database


// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    return $posts;
}

// Search
include('../config.php');
if(isset($_POST['search']))
{
    $data = getPosts();

$search_Query = "SELECT * FROM `login` WHERE id = $data[0]";
    
    $search_Result = mysqli_query($conn, $search_Query);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
				session_start();
				$_SESSION['id']=' ';
                $id = $row['id'];
              echo "<script>setTimeout(\"location.href = 'account';\",0);</script>";
				
            }
        }else{
        
        }
    }else{
          
    }
}




?>
















<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin</title>
			<link href="../../img/logosm3.jpg" rel="shortcut icon" type="image/png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  
	<link rel="stylesheet" href="animate/animate.css">	
	<link rel="stylesheet" href="animate/animate.min.css">	

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition lockscreen" style="height: 10%;background-color:#3C8DBC;">

<div class="lockscreen-wrapper">
  <div class="lockscreen-logo animated  zoomIn">
    <a style="color:white;"><b>Administration</a>
  </div>

  <div class="lockscreen-name animated  fadeInUp"style=" color:white;">Admin of MAT Solutions Inc</div>


  <div class="lockscreen-item animated  animated  fadeInUp">
    <div class="lockscreen-image ">
      <img src="../../img/logosm3.jpg" alt="User Image">
    </div>

    <form class="lockscreen-credentials" name="contact2" action="lockscreen" method="post">
      <div class="input-group">
        <input type="password" name="id" class="form-control" placeholder="Pin code"value="<?php echo $id;?>">

        <div class="input-group-btn">
          <a src="privacy.php"  type="submit" name="search" class="btn"><input type="submit" class="fa fa-arrow-right text-muted" name="search" value=" "style="background-color:white;border:0;"><i class="fa fa-arrow-right text-muted"></i></a>
        </div>
      </div>  
    </form>  


  </div>

  <div class="help-block text-center animated  fadeInUp"style=" color:white;"">
    Enter The password to retrieve your session
  </div>

  <div class="lockscreen-footer text-center"style=" color:white;">
    Copyright &copy; 2018 MAT Solutions Inc<b><a href="https://adminlte.io" class="text-black"style="color:white;"></a></b><br>
    All rights reserved
  </div>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
