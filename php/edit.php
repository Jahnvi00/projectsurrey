<?php
	include('config.php');
	
	$edit_record=$_GET['edit'];
	$query1="SELECT * FROM dbo.u_reg WHERE rollno='$edit_record'";
	$getResults= sqlsrv_query($conn,$query1);


	while($row=sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
	{
		$edit_id=$row['u_id'];
		$s_name=$row['username'];
		$s_father=$row['fname'];
		$s_school=$row['rollno'];
		$s_roll=$row[4];
		$s_class=$row[5];
	}
?>

<html>
	<head>
		<title>updating student's record</title>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
	<div class="container">
	<?php include 'header.php'?>
		<form method="POST" action="edit.php?edit_form=<?php echo $s_school;?>">
			<table width="500" border="0" align="center">
				<tr>	
					<th colspan="4"><h1>Updating Form</h1></th>
				</tr>
				<tr >
					<td align="right">Name</td>
					<td><input type="text" name="user_name1" value='<?php echo $s_name; ?>'></td>
				</tr>
				<tr >
					<td align="right">Father's Name</td>
					<td><input type="text" name="father_name1" value='<?php echo $s_father; ?>'></td>
				</tr >
				<tr>
					<td align="right">School's Name</td>
					<td><input type="text" name="school_name1" value='<?php echo $s_school; ?>'></td>
				</tr>
				<tr >
					<td align="right">Roll No</td>
					<td><input type="text" name="roll_no1" value='<?php echo $s_roll; ?>'></td>
				</tr>
				<tr >
					<td align="right">Class</td>
					<td><select name="class_name1">
						<option value='<?php echo $s_class; ?>'><?php echo $s_class; ?></option>
						<option value="9th">9th</option>
						<option value="10th">10th</option>
					</select></td>
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
		
		$student_name=$_POST['user_name1'];
		$student_father=$_POST['father_name1'];
		$student_school=$_POST['school_name1'];
		$student_roll=$_POST['roll_no1'];
		$student_class=$_POST['class_name1'];
		
		$query2="UPDATE dbo.u_reg SET username='$student_name',fname='$student_father',rollno='$student_school' WHERE rollno='$edit_record1'";
		//Update dbo.u_reg set username='anjana',fname='vishkarma',rollno='1111'where rollno='123456';
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
