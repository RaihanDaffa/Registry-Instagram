<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hasil</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<p align="center"><font size="5px"><b>Registrasi Sukses</b></font></p>
<table align="center">
<?php 

$host= "localhost";
$user= "root";
$password= "";
$email=$_POST['email'];
$fullname=$_POST['full-name'];
$username=$_POST['username'];
$password=$_POST['password'];


if($username)
{
$conn=mysqli_connect ($host,$user,$password);
mysqli_select_db ($conn,'dbinstagram');
$sql="insert into tbinstagram values ('$email', '$fullname', '$username', '$password')";
$hasil=mysqli_query ($conn,$sql); 
}

else{
	echo "Data Gagal Disimpan";
}


?>

<div id="container">
	<div class="Header">
		Verivication
	</div>

	<div class="hasil">
		<div class="email">
			Email or Number Phone: <?php echo" $email" ?><br>
		</div>

		<div class="fullname">
			Full name : <?php echo "$fullname"; ?><br>
		</div>

		<div class="user">
			Username  : <?php echo "$username"; ?><br>
		</div>

		<div class="password">
			Password : <?php echo "$password"; ?><br>
		</div>
		
		
	</div>
</div>







</table>
</body>
</html>



