<html>
	<head><title>Viewing the Record</title>
	<link rel="stylesheet" href="style.css">
	</head>
	<body>
	<div class="container">
	<?php include 'header.php'?>
		<center><font color='red' size='6'><?php echo @$_GET['delete'];?>
		<?php /*echo @$_GET['updated']; ?><?php echo @$_GET['logged']; */?>
			</font></center>
		<a href="logout.php">Logout</a>
		<br></br><table align="center" width='900' border='4'>
			<tr>
			
					<th colspan="20" align="center" bgcolor="yellow"><h1>Viewing all the record</h1></th>
				
			</tr>
			<tr align="center">
				<td>Serial No.</td>
				<td>Student's Name</td>
				<td>Father's Name</td>
				<td>Roll No.</td>
				<td>Delete</td>
				<td>Edit</td>
				<td>Detail</td>
			</tr>
	
			<?php
			
			include('config.php');
			$sqlselect="SELECT * FROM dbo.u_reg";
			$getResults= sqlsrv_query($conn, $sqlselect);
				
				$i=1;
		
		while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) 
			{
			 $user_name = $row['username'];
					$father_name=$row['fname'];
					$roll_no=$row['rollno'];
			
			
			//echo ($row['id'] . " " . $row['username']. . PHP_EOL);
			
				
					
			?>
				<tr align="center">
				<td><?php echo $i;$i++; ?></td>
				<td><?php echo $user_name; ?></td>
				<td><?php echo $father_name; ?></td>
				<td><?php echo $roll_no; ?></td>
				<td><a href ='delete.php?del=<?php echo $roll_no; ?>'>Delete</a></td>
				<td><a href='edit.php?edit=<?php echo $roll_no ?>'>Edit</a></td>
				<td><a href='view.php?detail=<?php echo $u_id ?>'>Detail</a></td>
				
					</tr>
			<?php } ?>
		</table>
		<?php include 'footer.php'?>
		<div>
	</body>
</html>








				
