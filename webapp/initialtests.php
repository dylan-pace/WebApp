<?php include 'header.php';
include 'leftnav.php'; ?>

	<h2>Test: Initialisation and Configuration</h2>
	<?php 	
	
	    print  "Base URL =". $config['base_url'];
	    print "<br />";
	    print "Database Details";
	    print "<pre>";
	    //print_r($db);
	    //print ($db);
	    print "The code for the databse is in the files but secret on this site.";
	    print "</pre>";
	    
	    include 'footer.php';
	    
	 ?>	
