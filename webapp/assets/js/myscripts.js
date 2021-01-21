$(document).ready(function() {
	 $('button').click(function() {
		    var rno = $(this).val();
 			$.ajax({
 				type: "POST",
 				url: "deleteFromCollection.php",
 				data: {id:rno},
 		        success: function(response) {
                       $('#row' + rno).fadeOut('slow');
            	}   	
 				}).done(function( result ) {
 				$("#msg").html( "Item at line number " +rno +" deleted ");
 			});        
	});
});