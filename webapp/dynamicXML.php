<?php 
header ("Content-Type:text/xml");//Tell browser to expect xml
include ("config/init.php");
$query = "SELECT * FROM films"; 
$result = $mysqli_conn->query($query) or die ("Error in query: $query. ".mysql_error()); 
//Top of xml file
$_xml = '<?xml version="1.0"?>'; 
$_xml .="<films>"; 
while($row = mysqli_fetch_array($result)) { 
$_xml .="<film>"; 
$_xml .="<film_name>".$row['filmName']."</film_name>"; 
$_xml .="<film_length>".$row['filmLength']."</film_length>"; 
$_xml .="<film_rating>".$row['filmRating']."</film_rating>"; 
$_xml .="</film>"; 
} 
$_xml .="</films>"; 
//Parse and create an xml object using the string
$xmlobj=new SimpleXMLElement($_xml);
//And output
print $xmlobj->asXML();
//or we could write to a file
//$xmlobj->asXML(winerys.xml);
?>