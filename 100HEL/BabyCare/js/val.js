$(document).ready(function() {
	$("#submit").click(function() {
	var a=$("#fullname").val();
	var b=$("#email").val();
	var c=$("#password").val();
	var d=$("#re-password").val();
	var e=$("#profile-image").val();
	var f=$("#address").val();
	var g=$("#city").val();
	var h=$("#contact").val();
	var i=$("#male").is(":checked");
	var j=$("#female").is(":checked");

	if (a=="") 
	{
		$("#fullname_msg").html("Insert your Fullname");
	}
	else
	{
		$("#fullname_msg").html("");
	}
	if (b=="") 
	{
		$("#email_msg").html("Insert your Email");
	}
	else
	{		
		$("#email_msg").html("");
		var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if (reg.test(b)==false)
		{
			$("#email_msg").html("Insert correct Email");
		}
		else
		{
			$("#email_msg").html("");
		}
	}
	if (c=="")
	{
		$("#password_msg").html("Insert your Password");
	}
	else
	{
		$("#password_msg").html("");
	}
	if (d=="")
	{
		$("#re-password_msg").html("Insert your Re-password");
	}
	else
	{
		$("#re-password_msg").html("");
	}
	if (e=="")
	{
		$("#profile-image_msg").html("Insert your profile image");
	}
	else
	{
		$("#profile-image_msg").html("");
	}
	if (f=="")
	{
		$("#address_msg").html("Insert your address");
	}
	else
	{
		$("#address_msg").html("");
	}
	if (g=="Select")
	{
		$("#city_msg").html("Select your city");
	}
	else
	{
		$("#city_msg").html("");
	}
	if (h=="")
	{
		$("#contact_msg").html("Insert your contact");
	}
	else
	{
		$("#contact_msg").html("");
	}
	if (i==false && j==false)
	{
		$("#gender_msg").html("Select Gender");
	}
	else
	{
		$("#gender_msg").html("");
	}
	return false;	
	});
});