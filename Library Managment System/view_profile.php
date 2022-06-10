<html>
<head>
 <title>Student Information</title>
 <style type="text/css">
#side_bar{
background-color: whitesmoke;
padding: 50px;
width: 150px;
height: 150px;
}
</style>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3
.1/css/bootstrap.min.css" integrity="sha384-
ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="an
onymous">
<style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
  	</style>
</head>
<body  style="background-color:lightgrey;">

<?php 
if(isset($_POST['login'])){
 {
 $username = 'root';
 $password = '';
 // Check connection
 try {
 $conn = new PDO("mysql:host=localhost;dbname=library_managment_system", $username, $password);
 // set the PDO error mode to exception
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch(PDOException $e) {
 echo "Connection failed: " . $e->getMessage();
 }
 session_start();
   $roll_no= $_SESSION['email'];
 $query_1 = $conn->prepare("select * from users where email = ?");
 $query_1->execute([$roll_no]);
 $result = $query_1->fetchAll(PDO::FETCH_ASSOC);

 ?>	
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Library Management System(LMS)</a>
			</div>
			<ul class="nav navbar-nav navbar-right">

				<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
			</ul>
		</div>
	</nav><br>
	<div class="container bootstrap snippets bootdey">
	<div class="panel-body inf-content">
    <div class="row">
        <div class="col-md-4">
            <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="https://bootdey.com/img/Content/avatar/avatar7.png" data-original-title="Usuario"> 
            <ul title="Ratings" class="list-inline ratings text-center">
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
            </ul>
        </div>
 
 </thead>
 <tbody>
 <?php
 foreach ($result as $key=>$value){
	$name = "";
	$email = "";
	$mobile = "";
	$address = "";
	$name = $value['name'];
		$email = $value['email'];
		$mobile = $value['mobile'];
		$address = $value['address'];
 }
 ?>
 <div class="col-md-6">
            <strong>Information</strong><br>
            <div class="table-responsive">
            <table class="table table-user-information">
                <tbody>
					<label>Name:</label>
					<input type="text" class="form-control" value="<?php echo $name;?>" disabled>
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="text" class="form-control" value="<?php echo $email;?>" disabled>
				</div>
				<div class="form-group">
					<label>Mobile:</label>
					<input type="text" class="form-control" value="<?php echo $mobile;?>" disabled>
				</div>
				<div class="form-group">
					<label>Address:</label>
					<textarea rows="3" cols="40" disabled="" class="form-control"><?php echo $address;?></textarea>
				</div>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
 
 </tbody>
 </table>
 <?php
}
}
else{
	?>
	<br><br><center><span class="alert-danger">Wrong Password</span></center>
	<?php
}
?>
</body>
</html>