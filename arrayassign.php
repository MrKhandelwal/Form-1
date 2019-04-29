
<html>
<head>
<title> Assignment of Using Array in form </title>
<style>

.center
{
	text-align:center;
}
.color
{
	background-color: lightblue;
}
body {
  background-image:url("img.jpg");
}
form{
	  font-size: 30px;
	  font-weight: bold;

}
input {
     
  width: 10%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
select
{
	
  width: 10s%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
</style>
</head>

<body class="center">


<h1>Uniraj Examination Form </h1>


<form action="saveData.php" method="post">

<?php 
	$gama = ["Andra Pradesh","Aunachal Pradesh"," Assam","Bihar", "Chhattisgarh"," Goa"," Gujarat"," Haryana"," Himachal Pradesh"," Jammu and Kashmir ","Jharkhand ","Karnataka"];
	$month =["January","Februray","March"," April"," May","June "," August"," September ","October ","November"," December"];	
	$year =["1990 ","1991 ","1992"," 1993"," 1994"," 1995 ","1996 ","1997 ","1998"," 1999"," 2000","  2001"," 2002"," 2003 ","2004 ","2005 ","2006"," 2007"," 2008"," 2009 ","2010 ","2011 ","2012 ","2013 ","2014 ","2015"," 2016"," 2017 ","2018"," 2019"];
	$age =["Under 18","Above 18","Above 30"];

?>

State: <select name="select" class = "color"> <option></option>
		<?php foreach($gama as $value)
		{
			echo "<option  value=$value>".$value;
		}
		
		?>
		</option>
		
		</select>
		<br /><br/>
		
		
		Enter Your Name <input type="text" name="pun" id="000" class="color"> 
		 
		<br/> <br/>
		
		
Enter Your Receipt Number<input type="number" name="num"class="color">

<br/> <br/>

	
Enter Your Birth Date :<select name="mate" class="color"> <option>-select-</option>
								<?php for($i=1;$i<=31;$i++)
								{
									echo"<option value=$i>".$i;
								}
								?>
								</option>
								</select>


<select name="cate" class="color"> <option>--- select----</option>
				<?php foreach($month as $beta){
					echo "<option value=$beta>".$beta;
					}
					?>
					
					</option>
					</select>
					
					
					
					
<select name="date" class="color"> <option>----select----</option>
					<?php foreach ($year as $lolo)
					{
						echo"<option value=$lolo>".$lolo;
					}
					?>
					
					</option>
					</select>
					
		<br/>			<br/>
					
Gender: <input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female
		<input type="radio" name="gender" value="Other">Other
<br> <br/>


Enter Your College Name:<input type="text" name="uni" class="color">

<br/><br/>

Enter Your Subject:<input type="text" name="sub" class="color">

<br/> <br/>
Select State For Examination:<select name="sexam" class="color"> <option></option>
													<option>Jaipur</option>
													<option>Jodhpur</option>
													<option>Kota</option>
</select>
<br/> <br/>

<button type ="submit" class="color" value="save">Save</button> 







<br/>	<br/>


</form>



</body>
</html>











