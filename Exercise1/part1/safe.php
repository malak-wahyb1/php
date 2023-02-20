<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>My PHP Page</title>
  <link rel="stylesheet" type="text/css" href="safe.css">
</head>
<body>
<?php

$host = 'localhost:3306';
$username = 'root';
$password = '1234';
$database = 'user';
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (isset($_POST['register'])) {

$Fullname=$_POST["Fullname"];
$username1=$_POST["username"];
$password1=$_POST["password"];
$email=$_POST["email"];
$datebirth=$_POST["birthdate"];
$socialnb=$_POST["socialnb"];
$hashed_password = password_hash($password1, PASSWORD_DEFAULT);
$sql = "INSERT INTO userInfo (FUllName, username, password,email,dateofbirth,socialnb) VALUES ('$Fullname', '$username1', '$hashed_password','$email','$datebirth','$socialnb')";
$conn->query($sql);
echo "<h1 class='welcome'>welcome $Fullname</h1>";
echo "<h3 class='welcome'>your user name is $username1</h3>";
echo "<h3 class='welcome'>your email is $email</h3>";
echo "<h3 class='welcome'>your date of birth is $datebirth</h3>";
echo "<h3 class='welcome'>your date of Social security number is $socialnb</h3>";
}else if(isset($_POST['login'])){

$usernamelog = $_POST['usernamelog'];
$passwordlog = $_POST['passwordlog'];

$stmt = $conn->prepare("SELECT * FROM userInfo WHERE username=? AND password=?");
$stmt->bind_param("ss", $usernamelog, $passwordlog);
$stmt->execute();


$result = $stmt->get_result();


if ($result->num_rows == 1) {    echo "<h1 class='welcome-login'>Welcome back, $usernamelog!</h1>";
} else {
    echo "<h1 class='error-login'>Invalid username or password.</h1>";
}
$stmt->close();

}

?>


</body>
</html>