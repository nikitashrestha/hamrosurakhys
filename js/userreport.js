var subject;
var image;
var content;
var decode;
var balla;

function Refresh()
{
	balla=this.responseText;
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200)
		{
			balla=this.responseText;
			decode=JSON.parse(balla);
			alert("shristi is great");
			document.getElementById("OneList").innerHTML=decode[0].Subject;
			document.getElementById("TwoList").innerHTML=decode[1].Subject;
			document.getElementById("ThreeList").innerHTML=decode[2].Subject;
			document.getElementById("FourList").innerHTML=decode[3].Subject;
			document.getElementById("FiveList").innerHTML=decode[4].Subject;	
			document.getElementById("SixList").innerHTML=decode[5].Subject;
			document.getElementById("SevenList").innerHTML=decode[6].Subject;
			document.getElementById("EightList").innerHTML=decode[7].Subject;
			document.getElementById("NineList").innerHTML=decode[8].Subject;	
			document.getElementById("TenList").innerHTML=decode[9].Subject;	

		}
	};
	xmlhttp.open("GET", "listrefresh.php", true);
	xmlhttp.send();	

}
function Click(value)
{
	document.getElementById("Subject").innerHTML=decode[value].Subject;
	document.getElementById("caption").innerHTML=decode[value].ImagePath;
	document.getElementById("Image").src=decode[value].ImagePath;
	document.getElementById("Content").innerHTML=decode[value].Content;
	document.getElementById("OneUser").innerHTML=decode[value].Email;
}
