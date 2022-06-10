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

<body >
<style>
body {
  background-image: url('abcd.jpg');
}
</style>
<?php 
if(isset($_POST['login'])){
					
if (isset($_POST['Email'])) 
{

				$username = 'root';
				$password = '';
				// Check connection
				try 
				{
				$conn = new PDO("mysql:host=localhost;dbname=library_managment_system", $username, $password);
				// set the PDO error mode to exception
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} catch(PDOException $e) 
				{
				echo "Connection failed: " . $e->getMessage();
				}

				$roll_no = $_POST["email"];
				session_start();
				$_SESSION['email']=$roll_no;

				// where user id = 1301 OR 1=1
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
					<br><br>
					<form action="view_profile.php" method="post">
					<div class="col d-flex justify-content-center">
				<div class="row">
					<div class="col-sm-12">
					<div class="card" style="width: 18rem;">
					<div class="card">
					<div class="card-header">Profile</div>
					<div class="card-body">
					<button type="submit" name="login" class="btn btn-primary">View Profile</button>	
					</div>
					</div>
				</div>
				</form>
				</div>
				</div><br><br>
				

				<form action="view_issued_books.php" method="post">
					<div class="col d-flex justify-content-center">
				<div class="row">
					<div class="col-sm-12">
					<div class="card" style="width: 18rem;">
					<div class="card">
					<div class="card-header">Issued Books</div>
					<div class="card-body">
					<button type="submit" name="login" class="btn btn-primary">View Issued Books</button>	
					</div>
					</div>
				</div>
				</form>
				</div>
				</div>
				<br><br>
				

				<form action="view_available_books.php" method="post">
					<div class="col d-flex justify-content-center">
				<div class="row">
					<div class="col-sm-12">
					<div class="card" style="width: 18rem;">
					<div class="card">
					<div class="card-header">Available Books</div>
					<div class="card-body">
					<button type="submit" name="login" class="btn btn-primary">View Available Books</button>	
					</div>
					</div>
				</div>
				</form>
				</div>
				</div>
				
				</div>
				<?php
				//  $email = $_POST["email"];
				//  $query_1 = $conn->prepare("select book_name,book_author from issued_books join users using (id) where email = ?");
				//  $query_1->execute([$email]);
				//  $result = $query_1->fetchAll(PDO::FETCH_ASSOC);
				?>
				

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