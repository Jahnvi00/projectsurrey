<?php
	include('config.php');
	
	$edit_record=$_GET['edit'];
	$query1="SELECT * FROM dbo.food WHERE id='$edit_record'";
	$getResults= sqlsrv_query($conn,$query1);


	while($row=sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
	{
		$edit_id=$row['u_id'];
		$f_name=$row['username'];
		$f_country=$row['country'];
		$f_phone=$row['phone'];
		$f_address=$row['address'];
		
	}
?>

<html>
	<head>
		<title>updating record</title>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
	<div class="container">
	<?php include 'header.php'?>
		<form method="POST" action="edit.php?edit_form=<?php echo $f_name;?>">
			<table width="500" border="0" align="center">
				<tr>	
					<th colspan="4"><h1>Updating Form</h1></th>
				</tr>
				<tr >
					<td align="right">Name</td>
					<td><input type="text" name="user_name1" value='<?php echo $f_name; ?>'></td>
				</tr>
				<tr >
					<td align="right">Country</td>
					<td><input type="text" name="father_name1" value='<?php echo $f_country; ?>'></td>
				</tr >
				<tr>
					<td align="right">Phone</td>
					<td><input type="text" name="school_name1" value='<?php echo $f_phone; ?>'></td>
				</tr>
				<tr >
					<td align="right">Address</td>
					<td><input type="text" name="roll_no1" value='<?php echo $f_address; ?>'></td>
				</tr>
				
				<tr>
					<td colspan="5" align="center"><input type="submit" value="Update" name="update"></td>
				</tr>
			</table>
			
		</form>
		<?php include 'footer.php'?>
		</div>
	</body>
</html>
<?php
	if(isset($_POST['update'])){
	
		$edit_record1 = $_GET['edit_form'];
		
		$food_name=$_POST['name'];
		$food_country=$_POST['country'];
		$food_phone=$_POST['phone'];
		$food_address=$_POST['address'];
		
		
		$query2="UPDATE dbo.food SET username='$food_name',name='$food_country',country='$food_phone' WHERE id='$edit_record1'";
		//Update dbo.food set username='jahnvi',name='dhand',id='the surrey'where id='the surrey';
		$getResult1=sqlsrv_query($conn, $query2);
		
		echo "<script>";
        	echo "window.alert('Data Updated')
		window.location.href='view.php';
		</script>";
		
		/*if(mysql_query($query1))
		{
			echo "<script>window.open('view.php?updated=Record has been updated..!','_self')</script>";
		}*/
	}
?>
