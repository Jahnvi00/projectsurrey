<html>
	<head>
		<title>Booking Form</title>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
	<div class="container">
	<?php include 'header.php'?>
	
		<form method="POST" action="index.php">
			<table  border="0" align="center">
				<tr>	
					<th colspan="6"><h1>Booking Form</h1></th>
				</tr>
				<tr >
					<td align="right"><label>Name:</label></td>
					<td><input type="text" name="name"><font color="red"><?php echo @$_GET['name']; ?></font></td>
				</tr>
				<tr >
					<td align="right"><label>Country:</label></td>
					<td><input type="text" name="country"><font color="red"><?php echo @$_GET['country']; ?></font></td>
				</tr >
				<tr>
					<td align="right"><label>Phone:</label></td>
					<td><input type="text" name="phone"><font color="red"><?php echo @$_GET['phone']; ?></font></td>
				</tr>
				<tr >
					<td align="right"><label>Address:</label></td>
					<td><input type="text" name="address"><font color="red"><?php echo @$_GET['address']; ?></font></td>
				</tr>
				
				<tr>
					<td colspan="5" align="center"><input type="submit" value="Submit" name="submit"></td>
				</tr>
			</table>
			
		</form>
		<?php include 'footer.php'  ?>
		<div>
	</body>
</html>
<?php


include('config.php');
 
 if (isset($_POST['submit']))
 {
 $food_name=$_POST['name'];
 $food_country=$_POST['country'];
 $food_phone=$_POST['phone'];
 $food_address=$_POST['address'];

 if($food_name=='')
 {
	echo "<script>window.open('index.php?name=name is required','_self');</script>";
	exit();
 }
 if($food_country=='')
 {
	echo "<script>window.open('index.php?country=country is required','_self');</script>";
	exit();
 }
if($food_phone=='')
 {
	echo "<script>window.open('index.php?phone=phone is required','_self');</script>";
	exit();
 }
if($food_address=='')
 {
	echo "<script>window.open('index.php?address=address is required','_self');</script>";
	exit();
 }
 

	 
	 $tsql="insert into food (name,country,phone,address)values('$food_name','$food_country','$food_phone','$food_address')";
$getResults= sqlsrv_query($conn, $tsql);
	 


//if($conn->query($que)=== true)
//{
	echo "<center><b>The follwing Data has been inserted into our databse:</b></center>";
	echo "<table width='500px'align='center' border='4'><tr><td>$food_name</td><td>$food_country</td><td>$food_phone</td><td>$food_address</td></tr></table>";                      
//}


}


?>
