<?php
session_start();
$servername="localhost";
$username="id13073931_online";
$password="Piet17cs078@2487";
$dbname="id13073931_online";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$name=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$DOB=$_POST['date1'];
$gender=$_POST['gender'];
$_SESSION['mobile']=$mobile;
$_SESSION['email']=$email;

$sql="INSERT INTO signup(`name`,`email`,`mobile`,`password`,`date1`,`gender`) VALUES ('$name','$email','$mobile','$password','$DOB','$gender')";
if (mysqli_query($conn,$sql))
 {
	echo "<script>
        window.location.href='loginuser.php'</script>";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
