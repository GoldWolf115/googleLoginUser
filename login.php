<?php

require_once "config.php";
if(isset($_SESSION['access_token'])){
    header('location:index.php');
    exit();
}
$loginURL= $gClient->createAuthUrl();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login With Google API</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="contatiner" style='margin-top:100px;'>
        <div class="row justify-center-center">
            <div class="col-md-6 col-offset-3" align="center">
                <img src="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwjtqL7duZ3lAhVE63MBHTR9Aj0QjRx6BAgBEAQ&url=https%3A%2F%2Fmyonlineaccount.affinitywater.co.uk%2FAccount%2Fhomemovelogin%3FreturnUrl%3D%2Fhomemove%2Funmeasuredmoveout&psig=AOvVaw3lDrxGVfdplPzbR2DVtyyN&ust=1571200669690903" alt="default">

                <form action="">
                    <input type="text" placeholder="Email.." name="email" class="form-control"></br>
                    <input type="password" placeholder="Password..." name="password" class="form-control"></br>
                    <input type="submit" value="Log in" name="login" class="btn btn-primary">
                    <input type="button" onclick="window.location='<?php echo $loginURL;?>'" value="Log in with Google" class="btn btn-danger">

                </form>
            </div>
        </div>
    </div>
</body>
</html>