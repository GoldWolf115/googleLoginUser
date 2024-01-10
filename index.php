<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "loginuser";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

session_start();
if(!isset($_SESSION['access_token'])){
    header('location:login.php');
    
    
// Retrieve data from the form

}
$email = $_SESSION['email'];
// SQL query to insert data
$sql = "INSERT INTO user (email) VALUES ('$email')";
$data = "SELECT * from user where email = '$email'";

$result = mysqli_query($conn, $data);
if(mysqli_num_rows($result) == 0){
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



// Close the database connection
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Desctiption</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="contatiner" style='margin-top:100px;'>
        <div class="row justify-center-center">
            <div class="col-md-3" align="center">
                <img style='width:80%;' src="<?php echo $_SESSION['picture'];?>" alt="">
            </div>
            <div class="col-md-9">
                <table class="table table-hover table-bordered">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td><?php echo $_SESSION['name'];?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $_SESSION['email'];?></td>
                        </tr>
                        <tr>
                            <td>First Name</td>
                            <td><?php echo $_SESSION['givenName'];?></td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><?php echo $_SESSION['familyName'];?></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td><?php echo $_SESSION['gender'];?></td>
                        </tr>
                    </tbody>

                </table>
<p><a href="logout.php" class="btn btn-primary">Logout</a></p>
                
            </div>
        </div>
    </div>
</body>
</html>