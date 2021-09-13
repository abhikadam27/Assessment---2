<?php
	error_reporting(0);
		$con=mysqli_connect ("localhost","root","");
	if(!$con)
	{
		echo "Connection Error";
	}
	mysqli_select_db($con,"vsmit2021");
	$id=$_GET['id'];
	$task=$_GET['task'];
	if($task=='delete')
	{
	$sql="DELETE FROM `sataracontact` WHERE `id`=".$id;
	mysqli_query($con,$sql);
	}
	$sql="SELECT * FROM `sataracontact`";
	$result=mysqli_query($con,$sql);
?>
	<table border="2px" align="center" bgcolor="#FFFFCC" cellpadding="5px" cellspacing="10px">
	<tr>
		<th>SR.No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Subject</th>
		<th>Phone</th>
		<th>Message</th>
		<th>Delete</th>
	</tr>
<?php
	$i=1;
	while($row=mysqli_fetch_array($result))
	{
?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['subject']; ?></td>
		<td><?php echo $row['phone']; ?></td>
		<td><?php echo $row['message']; ?></td>
		<td><a href="viewdata.php?id=<?php echo $row['id'];?> &task=delete"> Delete</a></td>
	</tr>
<?php
	$i++;
	}
?>
	</table>
	
	