<?php include 'header.php';
include 'leftnav.php';
?>
<div class="two-thirds column">
<h2>Form to Database Interaction Test</h2>
<form name="form1" method="GET" action="formDBTest.php"> 
    <p>Search Title: <input name="searchTitle"  type="text" id="searchTitle" size="15"></p> 
</form>

<?php

$search = $_GET['searchTitle'];

if (!empty($_REQUEST['searchTitle'])) {

    $searchTitle = mysql_real_escape_string($_REQUEST['searchTitle']);    
    
}

$sql = $mysqli_conn->query("SELECT * FROM films WHERE filmName LIKE '%$search%'"); 
//$r_query = mysql_query($sql); 

//$result = $mysqli_conn->query("SELECT * FROM films WHERE filmName LIKE 'searchTitle'");

$name = 0;
$rating = 0;
$length = 0;
$image = 0;

while($row=mysqli_fetch_assoc($sql)){
    ?> <div align='center'> <?php echo 'Film Name: '; ?> </div> 
	<div align='center'><?echo $name = $row['filmName']; ?></div>  <?php
	echo '<br />';
	?> <div align='center'> <?php echo 'Film Rating: '; ?> </div> 
	<div align='center'><?echo $rating = $row['filmRating']; ?></div>  <?php
	echo '<br />';
	?> <div align='center'> <?php echo 'Film Length: '; ?> </div> 
	<div align='center'><?echo $length = $row['filmLength']; ?></div>  <?php
	echo '<br />';
	?> <div align='center'><?echo '<img src = "assets/images/' .($image= $row['filmImage']). '"style="width:200px;height:200px;">'; ?></div>  <?php
	echo '</br>';
	?>
	<?php
	?> <div align='center'> <?php echo'--------------------------------------------------------'; ?> </div> <?php
	echo '</br>';
	$name++;
	$rating++;
	$length++;
	$image++;
}


include 'footer.php';
?>