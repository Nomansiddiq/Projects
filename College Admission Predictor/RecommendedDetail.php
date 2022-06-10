<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="style3.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <title>Document</title>
  </head>
  <body style="background-color:rgb(192, 170, 170);">

<nav class="navbar navbar-dark bg-primary">
  <!-- *************************************************************** -->
  
  <?php 

if(isset($_POST['login'])){
 {
   $Email=$_POST['Email'];
   $password=$_POST['password'];
   $conn=mysqli_connect("localhost","root","","students");
   
   if(! $conn ) {
      echo "Sorry! Did not connect to Database";
   }
   
   $sql = "SELECT * FROM student where Email = '$Email' and Password= '$password' ";
   $result = mysqli_query(  $conn,$sql );
   
   if(! $result ) {
    echo 'alert("Connection Failed:")';
   }
   ?>

   <?php
   $n1=0;
   
   while($row = mysqli_fetch_array($result)) 
   {
      echo "<h1>Name:  {$row[1]} {$row[2]} "."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;".
         "NTS Marks : {$row[7]} <br> ". "               ",
         

         "";
         $n1=$row[7];
         
   }
   ?>
   
   
   </nav>
   <?php
   if($n1>=90)
   {
      ?>

      
    <section id="services">
      <div class="services container">
        <div class="service-top">
          <h1 class="section-title">
            Univ<span>ersi</span>ties <span>We</span> Reco<span>mm</span>end</h1>
            
            <h3>We always Recommended the High rated Ranked Universities to the
            students.</h3>
          
          <p style="font-size: 18px">
            
            According to your NTS marks you can get Admission in the following universities.
            

          </p>
        </div>
        <div class="service-bottom">
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>FAST NUCES</h2>
            <p style="font-size: 15px">
              Fast is currently placed at 351 (improved 150 positions from last
              year's rankings) in QS University Rankings (ASIA). click here to
              view. If we talk about national rankings, FAST is placed at 2nd
              position in the Computer Science and IT category.
              <br>
              <div>
                <a class="btn btn-primary" href="https://www.nu.edu.pk/Admissions/HowToApply" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>NUST</h2>
            <p style="font-size: 15px">
              It also merits mention that NUST currently stands at 358th in the
              World University Rankings, 74th in Asia University Rankings and
              41st in Young University Rankings, besides being number 1 in
              Pakistan in all above-mentioned categories.
              <br>
              <div>
                <a class="btn btn-primary" href="https://nust.edu.pk/admissions/" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>

          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>GIKI</h2>
            <p style="font-size: 15px">
              According to the QS World University Rankings 2021, LUMS has
              improved its position and is now ranked among 2951 top
              institutions of the world. Also its continential Ranking is 894
              and COuntry Ranking is 32. And it Got result of Excellence to
              2507.
              <br>
              <div>
                <a class="btn btn-primary" href="https://giki.edu.pk/admissions/admissions-undergraduates/" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>

          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>LUMS</h2>
            <p style="font-size: 15px">
              According to the QS World University Rankings 2021, LUMS has
              improved its position and is now ranked among 651-700 top
              institutions of the world. For the past seven years, LUMS was
              ranked among 701-750 top institutions, and the University is
              gaining global prominence.
              <br>
              <div>
                <a class="btn btn-primary" href="https://admissions.lums.edu.pk/application/" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>

          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>Punjab University</h2>
            <p style="font-size: 15px">
              QS World University Rankings 2021, which is officially recognized
              by the Government of the Punjab and Punjab Higher Education
              Commission, has issued its new ranking of universities across Asia
              in which PU has stood 145th, making a landmark jump of 87 points
              in just 3 years.
              <br>
              <div>
                <a class="btn btn-primary" href="http://admissions.pu.edu.pk/admissions/" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>UET</h2>
            <p style="font-size: 15px">
                In 2019, the world ranking of the university in Engineering & Technology stood at 451-500, but it ranked among the top-500 category in two engineering categories. In Electrical Engineering, UET ranked 351-400 and in Mechanical Engineering it ranked 401-450 in the world.
              <br>
              <div>
                <a class="btn btn-primary" href="https://admission.uet.edu.pk/Modules/EntryTest/Default.aspx" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>PIEAS</h2>
            <p style="font-size: 15px">
                PIEAS Ranks Among Top 400 By QS World University Ranking 2019. PIEAS Ranks Among Top 400 By QS World University Ranking 2019. PIEAS Ranks Among Top 400 By QS World University Ranking 2019.
              <br>
              <div>
                <a class="btn btn-primary" href="http://admissions.pieas.edu.pk/" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>GCU</h2>
            <p style="font-size: 15px">
                Government College University Lahore is ranked #1739 in Best Global Universities. Schools are ranked according to their performance across a set of widely accepted indicators of excellence. And Country Rank is 26th.
              <br>
              <div>
                <a class="btn btn-primary" href="https://www.gcu.edu.pk/admissions.php?pg=how-to-apply" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>University of Agriculture</h2>
            <p style="font-size: 15px">
                University of Agriculture Faisalabad is ranked #954 in Best Global Universities. Schools are ranked according to their performance across a set of widely accepted indicators of excellence. 
              <br>
              <div>
                <a class="btn btn-primary" href="http://admissions.uaf.edu.pk/" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>Quaid-i-Azam University</h2>
            <p style="font-size: 15px">
                Quaid-i-Azam University (QAU), has seen significant improvement in the QS World University Rankings by securing 378th position among the top 500 universities of the world.
              <br>
              <div>
                <a class="btn btn-primary" href="http://ugadmissions.qau.edu.pk/oas/app/index.aspx" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>UOL</h2>
            <p style="font-size: 15px">
              University of Lahore is ranked #3778
              in Best Global World Rank. Schools are ranked according to their
              performance across a set of widely accepted indicators of
              excellence. And stands at 14th rank in the country.
              <br>
              <div>
                <a class="btn btn-primary" href="https://uol.edu.pk/admissions/" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>UCP</h2>
            <p style="font-size: 15px">
              University of Centeral Punjab is ranked #4748
              in Best Global World Rank. Schools are ranked according to their
              performance across a set of widely accepted indicators of
              excellence. And stands at 20th rank in the country.
              <br>
              <div>
                <a class="btn btn-primary" href="https://admissions.ucp.edu.pk/" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
        </div>
      </div>
    </section>

   <?php
   }


  //  ------------------------------------------------------------------------------------------------------------


   if($n1>=80 && $n1<90)
   {
      ?>
    <section id="services">
      <div class="services container">
        <div class="service-top">
        <h1 class="section-title">
            Univ<span>ersi</span>ties <span>We</span> Reco<span>mm</span>end</h1>
            
            <h3>We always Recommended the High rated Ranked Universities to the
            students.</h3>
          
          <p style="font-size: 18px">
            
            According to your NTS marks you can get Admission in the following universities.
            

          </p>
        </div>
        <div class="service-bottom">

          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>Punjab University</h2>
            <p style="font-size: 15px">
              QS World University Rankings 2021, which is officially recognized
              by the Government of the Punjab and Punjab Higher Education
              Commission, has issued its new ranking of universities across Asia
              in which PU has stood 145th, making a landmark jump of 87 points
              in just 3 years.
              <br>
              <div>
                <a class="btn btn-primary" href="http://admissions.pu.edu.pk/admissions/" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>UET</h2>
            <p style="font-size: 15px">
                In 2019, the world ranking of the university in Engineering & Technology stood at 451-500, but it ranked among the top-500 category in two engineering categories. In Electrical Engineering, UET ranked 351-400 and in Mechanical Engineering it ranked 401-450 in the world.
              <br>
              <div>
                <a class="btn btn-primary" href="https://admission.uet.edu.pk/Modules/EntryTest/Default.aspx" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>PIEAS</h2>
            <p style="font-size: 15px">
                PIEAS Ranks Among Top 400 By QS World University Ranking 2019. PIEAS Ranks Among Top 400 By QS World University Ranking 2019. PIEAS Ranks Among Top 400 By QS World University Ranking 2019.
              <br>
              <div>
                <a class="btn btn-primary" href="http://admissions.pieas.edu.pk/" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>GCU</h2>
            <p style="font-size: 15px">
                Government College University Lahore is ranked #1739 in Best Global Universities. Schools are ranked according to their performance across a set of widely accepted indicators of excellence. And Country Rank is 26th.
              <br>
              <div>
                <a class="btn btn-primary" href="https://www.gcu.edu.pk/admissions.php?pg=how-to-apply" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>University of Agriculture</h2>
            <p style="font-size: 15px">
                University of Agriculture Faisalabad is ranked #954 in Best Global Universities. Schools are ranked according to their performance across a set of widely accepted indicators of excellence. 
              <br>
              <div>
                <a class="btn btn-primary" href="http://admissions.uaf.edu.pk/" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>Quaid-i-Azam University</h2>
            <p style="font-size: 15px">
                Quaid-i-Azam University (QAU), has seen significant improvement in the QS World University Rankings by securing 378th position among the top 500 universities of the world.
              <br>
              <div>
                <a class="btn btn-primary" href="http://ugadmissions.qau.edu.pk/oas/app/index.aspx" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>UOL</h2>
            <p style="font-size: 15px">
              University of Lahore is ranked #3778
              in Best Global World Rank. Schools are ranked according to their
              performance across a set of widely accepted indicators of
              excellence. And stands at 14th rank in the country.
              <br>
              <div>
                <a class="btn btn-primary" href="https://uol.edu.pk/admissions/" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>UCP</h2>
            <p style="font-size: 15px">
              University of Centeral Punjab is ranked #4748
              in Best Global World Rank. Schools are ranked according to their
              performance across a set of widely accepted indicators of
              excellence. And stands at 20th rank in the country.
              <br>
              <div>
                <a class="btn btn-primary" href="https://admissions.ucp.edu.pk/" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
        </div>
      </div>
    </section>
    <?php
   }

  //  ------------------------------------------------------------------------------------------------------------------------------------------

   if($n1>=70 && $n1<80)
   {
      ?>
      
    <section id="services">
      <div class="services container">
        <div class="service-top">
        <h1 class="section-title">
            Univ<span>ersi</span>ties <span>We</span> Reco<span>mm</span>end</h1>
            
            <h3>We always Recommended the High rated Ranked Universities to the
            students.</h3>
          
          <p style="font-size: 18px">
            
            According to your NTS marks you can get Admission in the following universities.
            

          </p>
        </div>
        <div class="service-bottom">

          
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>GCU</h2>
            <p style="font-size: 15px">
                Government College University Lahore is ranked #1739 in Best Global Universities. Schools are ranked according to their performance across a set of widely accepted indicators of excellence. And Country Rank is 26th.
              <br>
              <div>
                <a class="btn btn-primary" href="https://www.gcu.edu.pk/admissions.php?pg=how-to-apply" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>University of Agriculture</h2>
            <p style="font-size: 15px">
                University of Agriculture Faisalabad is ranked #954 in Best Global Universities. Schools are ranked according to their performance across a set of widely accepted indicators of excellence. 
              <br>
              <div>
                <a class="btn btn-primary" href="http://admissions.uaf.edu.pk/" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>Quaid-i-Azam University</h2>
            <p style="font-size: 15px">
                Quaid-i-Azam University (QAU), has seen significant improvement in the QS World University Rankings by securing 378th position among the top 500 universities of the world.
              <br>
              <div>
                <a class="btn btn-primary" href="http://ugadmissions.qau.edu.pk/oas/app/index.aspx" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>UOL</h2>
            <p style="font-size: 15px">
              University of Lahore is ranked #3778
              in Best Global World Rank. Schools are ranked according to their
              performance across a set of widely accepted indicators of
              excellence. And stands at 14th rank in the country.
              <br>
              <div>
                <a class="btn btn-primary" href="https://uol.edu.pk/admissions/" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>UCP</h2>
            <p style="font-size: 15px">
              University of Centeral Punjab is ranked #4748
              in Best Global World Rank. Schools are ranked according to their
              performance across a set of widely accepted indicators of
              excellence. And stands at 20th rank in the country.
              <br>
              <div>
                <a class="btn btn-primary" href="https://admissions.ucp.edu.pk/" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
        </div>
      </div>
    </section>
    <?php
   
  //  --------------------------------------------------------------------------------------------------------------------------------------

   }
   if($n1>=60 && $n1<70)
   {
      ?>
      
    <section id="services">
      <div class="services container">
        <div class="service-top">
        <h1 class="section-title">
            Univ<span>ersi</span>ties <span>We</span> Reco<span>mm</span>end</h1>
            
            <h3>We always Recommended the High rated Ranked Universities to the
            students.</h3>
          
          <p style="font-size: 18px">
            
            According to your NTS marks you can get Admission in the following universities.
            

          </p>
        </div>
        <div class="service-bottom">

          
          
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>University of Agriculture</h2>
            <p style="font-size: 15px">
                University of Agriculture Faisalabad is ranked #954 in Best Global Universities. Schools are ranked according to their performance across a set of widely accepted indicators of excellence. 
              <br>
              <div>
                <a class="btn btn-primary" href="http://admissions.uaf.edu.pk/" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>Quaid-i-Azam University</h2>
            <p style="font-size: 15px">
                Quaid-i-Azam University (QAU), has seen significant improvement in the QS World University Rankings by securing 378th position among the top 500 universities of the world.
              <br>
              <div>
                <a class="btn btn-primary" href="http://ugadmissions.qau.edu.pk/oas/app/index.aspx" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>UOL</h2>
            <p style="font-size: 15px">
              University of Lahore is ranked #3778
              in Best Global World Rank. Schools are ranked according to their
              performance across a set of widely accepted indicators of
              excellence. And stands at 14th rank in the country.
              <br>
              <div>
                <a class="btn btn-primary" href="https://uol.edu.pk/admissions/" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
          <div class="service-item">
            <div class="icon">
              <img
                src="https://img.icons8.com/bubbles/100/000000/services.png"
              />
            </div>
            <h2>UCP</h2>
            <p style="font-size: 15px">
              University of Centeral Punjab is ranked #4748
              in Best Global World Rank. Schools are ranked according to their
              performance across a set of widely accepted indicators of
              excellence. And stands at 20th rank in the country.
              <br>
              <div>
                <a class="btn btn-primary" href="https://admissions.ucp.edu.pk/" role="button" target="_blank">Apply Now</a>
              </div>
            </p>
          </div>
        </div>
      </div>
    </section>
   
          <?php
          

      
    }
    ?>
    

    


      <?php
   
 ?>	

 


    
    <?php
}
}
else{
	?>
	<br><br><br><br><br><br><br><br><center><span class="alert-danger">Wrong Password</span></center>
	<?php
}
?>
  </body>


</html>
