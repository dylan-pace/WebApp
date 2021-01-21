<?php
include 'header.php';
include 'leftnav.php';

if (!isset($_SESSION['admin_id'])&&empty($_SESSION['admin_id'])){

    print "You do not have permisson to access this page.";
    header("location: login.php");
    
}
?>

<html>
    <head>
        <title>CRUD</title>
    </head>
    <body>
        <h2>CRUD</h2>
        <a href= "formToDB.php";>Display Films</a> </br>
        <a href= "Create.php";>Create Films</a> </br>

    </body>
</html>

<?php
include 'footer.php';
?>