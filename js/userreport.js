var subject;
var image;
var content;
var decode; //stores all image reports 
var balla;


function Refresh()
{
	alert("Inside refresh list..");

	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200)
		{
			balla=this.responseText;
			decode=JSON.parse(balla);
			//alert("shristi is great"+decode.length);
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
	xmlhttp.open("GET", "listrefresh.php", true); //refreshh the list from here
	xmlhttp.send();	
	//return true;
}




function Click(value)
{

	document.getElementById("Subject1").innerHTML="Subject:";
	document.getElementById("Content1").innerHTML="Contents";
	document.getElementById("OneUser1").innerHTML="ContactNumber:";
	document.getElementById("Subject").innerHTML=decode[value].Subject;
	document.getElementById("Content").innerHTML=decode[value].Content;
	document.getElementById("OneUser").innerHTML=decode[value].ContactNumber;
	document.getElementById('1').src= decode[value].Image;
	//getvalue();
	//ImageLoad(decode[value].ImagePath);
}


