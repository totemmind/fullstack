<?php   
include 'model.php';
include 'view.php';
include 'my_php.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="my_style.css" />
    <script src="my_main.js"></script>
    <title>My Project</title>
    
</head>
<body>
    
<nav class="navbar navbar-dark bg-dark my_navbar">
<h3 class="my_logo navbar-brand col-sm-2 col-md-2">My Bord</h3>
<ul class="nav my_nav col-sm-7 col-md-7">
<?php my_nav(); ?>
</ul>
<ul class="nav top_nav col-sm-3 col-md-3">
   <li class="nav-item" ><?php user_tipe();?></li>
   <li  class="nav-item"></li>
</ul>

</nav>
<div class="container-fluid">
<div class="row">
<div class="col-sm-2 col-lg-2 my_sub_menu">

<?php courses(); ?>

</div>

<div class='col-sm-2 col-lg-2' id='my_students'>

 <?php studentDb(); ?>
</div>

<div class="col-sm-8 col-lg-8">
      
  
</div>


</div>
</div>
</body>
</html>
<script>


</script>
