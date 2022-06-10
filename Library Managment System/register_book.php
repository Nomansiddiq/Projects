<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library_managment_system");
	$query = "insert into users values(7,'$_POST[book_name]','hooks bell',2,1,'2021-06-21',3)";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration successfully....You may login now.")
	window.location.href = "index.php";
</script>