<?php
include('config.php');

$delete_record = $_GET['del'];

$query ="DELETE FROM dbo.u_reg WHERE rollno='$delete_record'";

$getResult=sqlsrv_query($conn, $query);

echo "<script>";
        echo "window.alert('Data Deleted')
	window.location.href='view.php';
</script>";
/*
//if($getResult===true ){
if($conn->query($que)=== true){

	
	//echo "<script>window.open('view.php?delete=Record Has been Deleted Successfully!','_self')<script>";
}
//}*/

?>
