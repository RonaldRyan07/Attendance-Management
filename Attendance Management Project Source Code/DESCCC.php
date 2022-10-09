<?php
  session_start();
  $isIndex = 0;
  if(!(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id']))) {
    session_destroy();
    if(!$isIndex) header('Location: index.php');
  }
?>

<?php include 'php/node_class.php'; ?>
<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Description</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/highcharts.js"></script>
  <script src="js/highcharts-exporting.js"></script>
  <script src="js/statistics.js"></script>
  <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
 </head>
 <body style="align-content: center;">
   <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
<br>
<a class="navbar-brand" href="index.php" style="font-size:28px;">CMR Institute of Technology</a><br />
          <a class="navbar-brand" href="index.php">Online Attendance</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="teacher.php">Dashboard</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="student.php">Students</a></li>
			<li><a href="statistics.php">Statistics</a></li>
			<li><a href="about.php">About</a></li>
            	<li><a href="contact.php">Contact</a></li>
			<li class="active"><a href="description.php">Description</a></li>
			<li><a href="logout.php">Logout</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav></br></br></br></br>
   </div>

<br><br><div style="text-align:center; font-size:50px;"><i>Student Description</i></div>

<div>
      <dl class="dl-horizontal"><br><br>

<dd>

<table border="2" cellspacing="4" cellpadding="10" width="100%" bgcolor="#E8E8E8">
<tr>
<th bgcolor="#000" style="color:white;"><b><i>Sl. No</i></b><br></th>
<th bgcolor="#000" style="color:white;"><b><i>Student Name</i></b></th>
<th bgcolor="#000" style="color:white;"><b><i>University Seat Number</i></b></th>
<th bgcolor="#000" style="color:white;"><b><i>Course</i></b><br></th>
<th bgcolor="#000" style="color:white;"><b><i>Present Semester</i></b><br></th>
<th bgcolor="#000" style="color:white;"><b><i>Age</i></b><br></th>
<th bgcolor="#000" style="color:white;"><b><i>Gender</i></b><br></th>
</tr>

<tr>
<th>1</th><th>ABUBAKKAR SIDDIQUE</th><th><a href="http://localhost/Online%20Attendance%20Management%20System/usn/1cs17.php" title="View this Student Details">001/CS/17</a></th><th>BE</th><th>5<sup>th</sup></th><th>21</th><th>Male</th>
</tr>

</table>

</dd>


</div>
</body>
</html>
