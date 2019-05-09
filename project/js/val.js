$(document).ready(function(){
	$("#username").blur(function(){
		var a = $(this).val();
		$.ajax({
			url : "checkusername.php",
			type : "post",
			data : {u:a},
			success : function(res){
				// alert(res);
				$("#username_msg").html(res);
			}
		})
	});





	$("#submit").click(function(){
		var a = $("#full_name").val();
		var b = $("#profile_pic").val();
		var c = $("#username").val();
		var d = $("#pass").val();
		var e = $("#re_pass").val();
		var f = $("#add").val();
		var g = $("#contact").val();
		var h = $("#city").val();


		var x = $("#male").is(":checked");
		var y = $("#female").is(":checked");


		var check = true;

		if(a=="")
		{
			check=false;
			$("#full_name_msg").html("Insert Your Full Name");
		}
		else
		{
			$("#full_name_msg").html("");
		}
		if(b=="")
		{
			check=false;
			$("#profile_pic_msg").html("Select Your Image");
		}
		else
		{
			$("#profile_pic_msg").html("");
		}
		if(c=="")
		{
			check=false;
			$("#username_msg").html("Insert Your Username/Email");
		}
		else
		{
			
			$("#username_msg").html("");
			var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if(reg.test(c)==false)
			{
				check=false;
				$("#username_msg").html("Insert Correct Email Id");
			}
			else
			{
				$("#username_msg").html("");

			}





		}
		if(d=="")
		{
			check=false;
			$("#pass_msg").html("Insert your Password");
		}
		else
		{
			$("#pass_msg").html("");

		}
		if(e=="")
		{
			check=false;
			$("#re_pass_msg").html("Insert Re-Password");
		}
		else
		{
			
			$("#re_pass_msg").html("");
			if(d != e)
			{
				check=false;
				$("#re_pass_msg").html("Password and Re-Password not Same");
			}
			else
			{
				$("#re_pass_msg").html("");
			}




		}
		if(f=="")
		{
			check=false;
			$("#add_msg").html("Insert Your Address");
		}
		else
		{
			$("#add_msg").html("");

		}
		if(g=="")
		{
			check=false;
			$("#contact_msg").html("Insert Your Contact Number");
		}
		else
		{
			
			$("#contact_msg").html("");
			if(isNaN(g)==true)
			{
				check=false;
				$("#contact_msg").html("Insert Numbers Only");

			}
			else
			{
				$("#contact_msg").html("");
				if(g.length != 10)
				{
					check=false;
					$("#contact_msg").html("Insert 10 Digits");
				}
				else
				{
					
					$("#contact_msg").html("");
				}

			}
		}
		if(h=="Select")
		{
			check=false;
			$("#city_msg").html("Select Your City");
		}
		else
		{
			$("#city_msg").html("");
		}

		if(x==false && y==false)
		{
			check=false;
			$("#gender_msg").html("Select Gender");
		}
		else
		{
			$("#gender_msg").html("");
		}


		// var a = document.getELementById("full_name").value;
		return false;
	});	
});
