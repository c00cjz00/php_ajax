<html>
<head>
<title>PHP AJAX Image Upload</title>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function (e) {
	$("#uploadForm").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "run.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
			$("#targetLayer").html(data);
		    },
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
</head>
<body>
<form id="uploadForm">
<div id="targetLayer">No Image</div>
<input name="userImage" type="file" class="inputFile" /><br/>
<input type="submit" value="Submit" />
</form>
</body>
</html>