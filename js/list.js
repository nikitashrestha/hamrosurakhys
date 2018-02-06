	var V1=document.getElementById("V1");
	var V2=document.getElementById("V2");
	var V3=document.getElementById("V3");
	var V4=document.getElementById("V4");
	var V5=document.getElementById("V5");
	var V6=document.getElementById("V6");
	var V7=document.getElementById("V7");
	var reset=7;
	var json;
	var decode;


function OneShowInMap()
{
	var lati = decode[0].Latitude;
	var lngi= decode[0].Longitude;
	var latlng = {lat: parseFloat(lati), lng: parseFloat(lngi)};
	geocoder.geocode({'location': latlng}, function(results, status)
	{
	if (status === 'OK') 
	{
	  if (results[0]) 
	  {
	
	    map.setZoom(10);
	    map.setCenter(latlng);
	    marker = new google.maps.Marker({
	      position: latlng,
	      map: map
	    });
	    infowindow.setContent(results[0].formatted_address);
	    infowindow.open(map, marker);
	  }  
	  else 
	  {
	    window.alert('No results found');
	  }
	} 
	else 
	{
	  window.alert('Geocoder failed due to: ' + status);
	}
	});
}

function OneSendMessage()
{
	var OneContact=decode[0].Contact;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200)
		{

			balla=this.responseText;
			alert(JSON.parse(balla));
			xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() 
			{
				if (this.readyState == 4 && this.status == 200)
				{
					balla=this.responseText;					
				}
			};
			xmlhttp.open("GET", "unset.php?contact="+OneContact, true);
			xmlhttp.send();	

		}
	};
	xmlhttp.open("GET", "deliversms.php?contact="+OneContact, true);
	xmlhttp.send();
}
