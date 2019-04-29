<?php
include("connection1.php");
error_reporting(0);

?>

<?php
$i = $_POST['select'];
$j = $_POST['pun'];
$k = $_POST['num'];
$l = $_POST['gender'];
$m = $_POST['uni'];
$n = $_POST['sub'];
$o = $_POST['sexam'];

if($j!=='')
	{
		$query = "INSERT INTO SPICEGEMS VALUES('$j','$l','$k','$m','$n','$i','$o')";
        $data = mysqli_query($conn,$query);


	if($data)
	{
		echo "data inseted in Database";
	}
	
	}
	else
	{
		echo"All Fields are required";
	}

?>

<a href="disply.php">Click to see the data </a>