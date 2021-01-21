<?php
include 'header.php';
include 'leftnav.php';
$string = 'films';
?>


<h2>Test Functions</h2>
<p>a) The length of films is <?php echo strlen("Hello"); ?></p>
<p>b) Films to uppercase is <?php echo strtoupper("films"); ?></p>
<p>c) films cinema movie - the substring cinema starts at index number 6 - <?php echo substr("films cinema movie",6);  ?></p>
<p>d) films encrypted by md5 is - <?php $str = "films"; echo md5($str); ?></p>
<p>e) Get the data type of 10.365 - <?php $x = 10.365; var_dump($x); ?></p>
<p>f) Fomat a number 26.574 - <?php $num = 26.574; echo $formattedNum = number_format($num) ?></p>


<?php
include 'footer.php';
?>