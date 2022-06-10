<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style2.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="register.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="FirstName" placeholder="Enter your First name" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="LastName" placeholder="Enter your Last name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="Email" placeholder="Enter your email" required>

          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="Phone_no" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="Password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" required>
          </div>
		   <div class="input-box">
            <span class="details">FSC/A level Marks</span>
            <input type="text" name="FCS_A_Level_marks" placeholder="FSC/A level Marks" required>
          </div>
		   <div class="input-box">
            <span class="details">NTS Marks</span>
            <input type="text" name="NTS_marks" placeholder="NTS Marks" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
