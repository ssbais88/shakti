<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
           $("button").click(function(){
           	$.ajax({
           		url : "call_send_rec_sever.php",
           		type : "post",
           		success : function(rec){
           			$("#tabs").html(rec);
           			$("#name").val("");
           			$("#fee").val("");
           		}
           	})

           });


		});
		function getAll()
		{
			$.ajax({
				url : "call_recieve_server.php",
				type : "get",
				success : function(rec){
					$("#tabs").html(rec);
				} 
			})
		}

        getAll();
	</script>
</head>
<body>
<div align="center">
Name<input type="text" id="name"/>
<br>
<br>
Fee<input type="text" id="fee"/>
<br>
<br>
<button>Save</button>
<br>
<table border="1" cellspacing="0" id="tabs"></table>
</div>
</body>
</html>