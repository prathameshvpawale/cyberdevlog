<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

    <div class="login">

<?php
require('ldb.php');
if (isset($_POST['username']))
{
    $var = 0;
    if(isset($_POST['Email']))
    {
    $username = ($_POST['username']);
    $Email = ($_POST['Email']);
    $password = ($_POST['password']);
    
    if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
    {
        $msg = 'The Email you have entered is invalid, please try again.';
        echo $msg;
    }else{

        $query = "INSERT INTO `users` (`username`, `password`, `Email`) VALUES ('$username', '$password', '$Email');"; 
        $result1 = mysqli_query($conn,$query);

        if($result1)
        {
            echo "<div class='form'>
            <h3>You are registered successfully.</h3>
            <br/>Click here to start <a href='start.php'>Login</a></div>";
        }
  }  
  $conn->close();
    }
        }
else{
?>

<div class="form">


<div class="container mb-3 w-25">
     <h1 class="text-center">Register Here!!</h1>
     <form name="registration" action="" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" maxlength="11" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="username">Email</label>
            <input type="Email" maxlength="23" class="form-control" id="email" name="Email" placeholder="Email" aria-describedby="emailHelp"required/>
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" maxlength="23" class="form-control" id="password" name="password">
        </div>
        
         
        <button type="submit" class="btn btn-primary">Click me to Register</button>
     </form>
    </div>
</div>
<?php } ?>
</body>
</html>
