<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['login']!=''){
$_SESSION['login']='';
        header('Location: http://localhost/reallib/main.php');

}

?>
<html>
<head>
<title> ssv online library</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
 <div class="banner"> </div>
<div class="content">
<h1> DEPARTMENT LIBRARY</h1>
<div>
 <button type="button"><span></span>READ ME</button>
 <a href="home.php">
 <button>SKIP</button>
</a>
</div>
</div>
</body>
</html>


