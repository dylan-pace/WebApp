<?php
    header ("Content-Type:text/xml");
    
      $content =  file_get_contents("http://api.apixu.com/v1/current.json?key=1b59ef589249472c909111432181011&q=Leeds");

    function get_string_between($string, $start, $end){
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }
    
    $location = get_string_between($content, 'name":"', '","region');
    
    $celsius = get_string_between($content, '"temp_c":', ',"temp_f');
    
    $condition = get_string_between($content, 'condition":{"text":"', '","icon"');

    $_xml = '<?xml version="1.0"?>'; 
    $_xml .="<weather>"; 
 
    $_xml .="<weather>"; 
    $_xml .="<location>".$location."</location>"; 
    $_xml .="<degrees>".$celsius."</degrees>"; 
    $_xml .="<condition>".$condition."</condition>";
    $_xml .="</weather>"; 

    $_xml .="</weather>"; 
    //Parse and create an xml object using the string
    $xmlobj=new SimpleXMLElement($_xml);
    //And output
    print $xmlobj->asXML();

?>