 var word="Hamro Surakshya...";
 var length=word.length;
 var i=0;
 var temp="";
 function Show()
 {
 	var show=setInterval(function(){
	 	if(length>i)
	 	{
	 		temp=(temp+word.substring(i, (i+1)));
	 		document.getElementById("slide").innerHTML=temp;
	 		i=i+1;
	 	}
	 	else
	 	{
	 		document.getElementById("slide").innerHTML="";
	 		i=0;
	 		//slide.innerHTML.replace("0,1","");;
	 	}
 	}, 700);
 }