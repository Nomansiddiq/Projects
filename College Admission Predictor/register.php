<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"students");
	$query = "insert into student values(null,'$_POST[FirstName]','$_POST[LastName]','$_POST[Email]',$_POST[Phone_no],'$_POST[Password]','$_POST[FCS_A_Level_marks]','$_POST[NTS_marks]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration successfully....You may login now.")
	window.location.href = "index.php";
</script>