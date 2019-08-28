<html lang="en">
<head>
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
<?php
$reg = $_GET['d'];
$reg1 = $_GET['d1'];
$m1=strtolower($reg);
$m2=$m1."@sggs.ac.in";
$ma=mail($m2,'Your result','http://localhost/dashboard/c.php?d=$m1&d1=$reg1&b=SUBMIT+YOUR+REGISTRATION+NUMBER','From: swapnil25101999@gmail.com');
if($ma)
{?>
<div class="container center-align">

	<h2><?php echo" Your result is successfully sent on your college email.";?></h2>
    <?php echo"<br>";?>
 <b> <?php  echo"Note:If not recieved then check your email-id carefully and try again";?></b>
    <?php
}
?>
</body>
</html>