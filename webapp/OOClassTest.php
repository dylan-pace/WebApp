<?php
include 'header.php';
include 'leftnav.php';
include 'includes/classes/Films.php';

 $item = new Film();
 $item->setName("Iron Man");
 echo $item->getName();
 $item->setRating("12A");
 echo $item->getRating;
 $item->setLength("2.04");
 echo $item->getLength;


include 'footer.php';
?>