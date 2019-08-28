<html lang="en">
    <head>
    <style>
    .now{
	padding-bottom:5px;
	padding-top:5px;
}</style>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body class="html">
    <header><br>
    <div class="container">
<a href="testing.php" class="btn">BACK</a></div>
<div class="container center-align"><div class="now">
<h1>Department of Information technology</h1>
</div></div><br>

<?php
$con = mysqli_connect("localhost", "root", "","test"); // Establishing Connection with Server
 // Fetching variables of the form which travels in URL
$regx= $_GET['d1'];
if(!$con)
{
    echo"Failed to connect";
}
$q=mysqli_query($con,"SELECT * FROM x where R='A49' ");
while($row=mysqli_fetch_array($q))
{ 
?>
<div class="row">
<div class="row s12 m12">
<table class="highlight responsive-table centered">
        <thead>
          <tr>
          
              <th>Roll no</th>
              <th>Name</th>
              <th>status</th>
              <th>TOC</th>
              <th>DBMS(THEORY)</th>
              <th>DBMS(PRACTICLE)</th>
              <th>SE(THEORY)</th>
              <th>SE(PRACTICLE)</th>
              <th>OS(THEORY)</th>
              <th>OS(PRACTICLE)</th>
              <th>MATHS-4</th>
              <th>CL3</th>
              <th>SEMINAR</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><?php echo$row['R']?></td>
            <td><?php echo$row['Name']?></td>
            <td><?php echo$row['status']?></td>
            <td><?php echo$row['tocth']?></td>
            <td><?php echo$row['dbmsth']?></td>
            <td><?php echo$row['dbmspr']?></td>
            <td><?php echo$row['seth']?></td>
            <td><?php echo$row['sepr']?></td>
            <td><?php echo$row['osth']?></td>
            <td><?php echo$row['ospr']?></td>
            <td><?php echo$row['m4']?></td>
            <td><?php echo$row['cl3']?></td>
            <td><?php echo$row['sem']?></td>
          </tr>
        </tbody>
      </table><br>
      </div></div>
     <?php 
     $tocx= $row['tocth'];
	$dbmstx= $row['dbmsth'];
	$dbmspx=$row['dbmspr'];
	$setx= $row['seth'];
$sepx= $row['sepr'];
$ostx= $row['osth'];
$ospx= $row['ospr'];
$m4x= $row['m4'];
$sem1x= $row['sem'];
$cl3x= $row['cl3'];
if ($setx=="A+") {
  $setxv = 3 * 10;
 } else if ($setx=="A") {
   $setxv = 3 * 9;
 } else if ($setx=="B+") {
   $setxv = 3 * 8;
 } else if ($setx=="B") {
   $setxv = 3 * 7;
 } else if ($setx=="C+") {
   $setxv = 3 * 6;
 } else if ($setx=="C") {
   $setxv = 3 * 5;
 } else if ($setx=="D") {
   $setxv = 3 * 4;
 } else {
  $setxv=0;
}
if ($sepx=="A+") {
  $sepxv = 1 * 10;
 } else if ($sepx=="A") {
   $sepxv = 1 * 9;
 } else if ($sepx=="B+") {
   $sepxv = 1 * 8;
 } else if ($sepx=="B") {
   $sepxv = 1 * 7;
 } else if ($sepx=="C+") {
   $sepxv = 1 * 6;
 } else if ($sepx=="C") {
   $sepxv = 1 * 5;
 } else if ($sepx=="D") {
   $sepxv = 1 * 4;
 } else {
  $sepxv=0;
}
if ($ostx=="A+") {
  $ostxv = 3 * 10;
 } else if ($ostx=="A") {
   $ostxv = 3 * 9;
 } else if ($ostx=="B+") {
   $ostxv = 3 * 8;
 } else if ($ostx=="B") {
   $ostxv = 3 * 7;
 } else if ($ostx=="C+") {
   $ostxv = 3 * 6;
 } else if ($ostx=="C") {
   $ostxv = 3 * 5;
 } else if ($ostx=="D") {
   $ostxv = 3 * 4;
 } else {
  $ostxv=0;
}
if ($ospx=="A+") {
  $ospxv = 1 * 10;
 } else if ($ospx=="A") {
   $ospxv = 1 * 9;
 } else if ($ospx=="B+") {
   $ospxv = 1 * 8;
 } else if ($ospx=="B") {
   $ospxv = 1 * 7;
 } else if ($ospx=="C+") {
   $ospxv = 1 * 6;
 } else if ($ospx=="C") {
   $ospxv =1 * 5;
 } else if ($ospx=="D") {
   $ospxv = 1 * 4;
 } else {
  $ospxv=0;
}
if ($cl3x=="A+") {
  $cl3xv = 1 * 10;
 } else if ($cl3x=="A") {
   $cl3xv = 1 * 9;
 } else if ($cl3x=="B+") {
   $cl3xv = 1 * 8;
 } else if ($cl3x=="B") {
   $cl3xv = 1 * 7;
 } else if ($cl3x=="C+") {
   $cl3xv = 1 * 6;
 } else if ($cl3x=="C") {
   $cl3xv = 1 * 5;
 } else if ($cl3x=="D") {
   $cl3xv = 1 * 4;
 } else {
  $cl3xv=0;
}
if ($m4x=="A+") {
  $m4xv = 4 * 10;
 } else if ($m4x=="A") {
   $m4xv = 4 * 9;
 } else if ($m4x=="B+") {
   $m4xv = 4 * 8;
 } else if ($m4x=="B") {
   $m4xv = 4 * 7;
 } else if ($m4x=="C+") {
   $m4xv = 4 * 6;
 } else if ($m4x=="C") {
   $m4xv = 4 * 5;
 } else if ($m4x=="D") {
   $m4xv = 4 * 4;
 } else {
  $m4xv=0;
}
if ($tocx=="A+") {
  $tocxv = 4* 10;
 } else if ($tocx=="A") {
   $tocxv = 4 * 9;
 } else if ($tocx=="B+") {
   $tocxv = 4 * 8;
 } else if ($tocx=="B") {
   $tocxv = 4 * 7;
 } else if ($tocx=="C+") {
   $tocxv = 4 * 6;
 } else if ($tocx=="C") {
   $tocxv = 4 * 5;
 } else if ($tocx=="D") {
   $tocxv = 4 * 4;
 } else {
  $tocxv=0;
}
if ($dbmstx=="A+") {
  $dbmstxv = 4 * 10;
 } else if ($dbmstx=="A") {
   $dbmstxv = 4 * 9;
 } else if ($dbmstx=="B+") {
   $dbmstxv = 4 * 8;
 } else if ($dbmstx=="B") {
   $dbmstxv = 4 * 7;
 } else if ($dbmstx=="C+") {
   $dbmstxv = 4 * 6;
 } else if ($dbmstx=="C") {
   $dbmstxv = 4 * 5;
 } else if ($dbmstx=="D") {
   $dbmstxv = 4 * 4;
 } else {
  $dbmstxv=0;
}
if ($dbmspx=='A+') {
  $dbmspxv = 1 * 10;
 } else if ($dbmspx=='A') {
   $dbmspxv = 1 * 9;
 } else if ($dbmspx=='B+') {
   $dbmspxv = 1 * 8;
 } else if ($dbmspx=='B') {
   $dbmspxv = 1 * 7;
 } else if ($dbmspx=='C+') {
   $dbmspxv = 1 * 6;
 } else if ($dbmspx=='C') {
   $dbmspxv = 1 * 5;
 } else if ($dbmspx=='D') {
   $dbmspxv = 1 * 4;
 } else {
  $dbmspxv=0;
}
if ($sem1x=="A+") {
  $sem1xv = 1 * 10;
 } else if ($sem1x=="A") {
   $sem1xv = 1 * 9;
 } else if ($sem1x=="B+") {
   $sem1xv = 1 * 8;
 } else if ($sem1x=="B") {
   $sem1xv = 1 * 7;
 } else if ($sem1x=="C+") {
   $sem1xv = 1 * 6;
 } else if ($sem1x=="C") {
   $sem1xv = 1 * 5;
 } else if ($sem1x=="D") {
   $sem1xv = 1 * 4;
 } else {

  $sem1xv=0;
}
$now=$tocxv+$dbmstxv+$dbmspxv+$setxv+$sepxv+$ostxv+$ospxv+$cl3xv+$sem1xv+$m4xv;
$result=$now/23;?>
<div class="container center-align">
<h3><?php echo"Your SGPA is $result"?></h3>
</div>
    <?php  
     }
     if(mysqli_num_rows($q) == 0){?>
     <div class="container center-align"> <h3><?php echo"Sorry!!Your data is not available";?></h3></div>
    <?php
    }
?>
<footer class="page-footer  teal">
<div class="footer-copyright">
 <div class="container center-align">&copy; 2019 Swapnil Dhananjay Adnak,Inc</div>
 </div></footer>
</body>
    </html>