<?php 
include("connection1.php");

#error_reporting(0);
?>

<style>
table, th, td {
  border: 1px solid black;
    padding: 20px;
	  textalign:justify;
  border-collapse: collapse;	
  width:%;


}
</style>


<?php
$query = "SELECT * FROM SPICEGEMS";

$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);

#echo $total;

#$result = mysqli_fetch_assoc($data);

?><table
		<tr>	
				<th> Name</th>
				<th> Gender</th>
				<th> receipt_Number</th>
				<th> College_Name</th>
				<th> Subject</th>
				<th> Class</th>
				<th> City</th>

				
			
		<tr/>


<?php
if($total != 0)
	
	{
		while($result = mysqli_fetch_assoc($data))
			
			{
			echo "<table>
		<tr>	
				<td > ".$result['Name']."</td>
				<td> ".$result['Gender']."</td>
				<td> ".$result['receipt_Number']."</td>
				<td> ".$result ['College_Name']."</td>
				<td> ".$result['Subject']."</td>
				<td> ".$result['State']."</td>
				<td> ".$result['City']."</td>
				
				<tr>";
			
			}
	}
	
	else
	{
		echo "no record found";
	
	}
	
	
	?>
	</table>


