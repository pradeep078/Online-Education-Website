
<?php 

$a=$_POST['email'];
$b=$_POST['password'];
$servername="localhost";
$username="id13073931_online";
$password="Piet17cs078@2487";
$dbname="id13073931_online";

$conn=mysqli_connect($servername,$username,$password,$dbname);
$sql="select * FROM signup WHERE email='$a' && password='$b'";
$result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result))
    {
        session_start();
         $row=mysqli_fetch_assoc($result);
         $_SESSION["NAME"]=$row['name'];
         $_SESSION["EMAIL"]=$row['email'];
         header('location: index2.php');
    }
    else
    {
    	
     }


 ?>