<?php
include 'header.php';
include 'leftnav.php';

$search = $_GET['searchTitle'];

?>
<div class="two-thirds column">
<h2>Form to Database Interaction Test</h2>
<form name="form1" method="GET" action="formDBTest.php"> 
    <p>Search Title: <input name="searchTitle"  type="text" id="searchTitle" size="15"></p> 
</form>
<?php

//$result = $mysqli_conn->query("SELECT * FROM films WHERE filmName LIKE " . $search);
$result = $mysqli_conn->query("SELECT * FROM (films) WHERE filmName LIKE '%$search%'");

$name = 0;
$rating = 0;
$length = 0;
$image = 0;
 
while($row=mysqli_fetch_assoc($result)){
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
	?> <div align='center'> <?php echo'--------------------------------------------------------'; ?> </div> <?php
	echo '</br>';
	$name++;
	$rating++;
	$length++;
	$image++;
}


include 'footer.php';
?>