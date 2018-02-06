var balla;
var decode;
var email;
var pw;

function Submit()
{
	email=document.getElementById("Email").value;
	pw=document.getElementById("Password").value;
	if(email==" ")
	{
		alert("Can not login with Empty Fields....");
		window.location.href="index.php";
	}
	else
	{
		
		
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() 
		{
			if (this.readyState == 4 && this.status == 200)
			{		
				balla=this.responseText;
				decode=JSON.parse(balla);
				if((email==decode[0].Email)&&(pw==decode[0].Password))
				{
					window.location.href="map.php";
				}
				else
				{

					alert("Mistake in password or email");
					window.location.href="index.php";
				}
			}
		};
		xmlhttp.open("GET", "login.php?email="+email, true);
		xmlhttp.send();

	}
}
	