<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>cyberdevlog</title>
</head>
<body>
<div class="login">
<?php
require('ldb.php');
session_start();

if (isset($_POST['username'])){

    $username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
   
    $query = "SELECT * FROM `users` WHERE `username`='$username' and `password`='$password' ";
	$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location: iindex.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='index.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">

<h1 class="text-center">CyberDevLog<i class='bx bx-world' ></i></h1>
<div class="container mb-3 w-25">
     <h1 class="text-center"><i class='bx bx-world' ></i></h1>
     <form action="" method="post"name="login">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" maxlength="11" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" maxlength="23" class="form-control" id="password" name="password">
        </div>
        
        <button type="submit" name="submit" value="Login" class="btn btn-primary">Login</button>
          
		<span>or</span>
                <a href="lregistration.php">signup Account</a>
     </form>
    </div>

</div>
<?php } ?>
</body>
</html>
