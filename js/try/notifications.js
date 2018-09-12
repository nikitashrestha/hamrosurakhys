var geocoder;
var infowindow;
var map;
var marker;
var latlng={lat: 27.6828417, lng: 85.3200053};
var decode;
var balla;
function Initialize()
{
	geocoder = new google.maps.Geocoder();
	infowindow = new google.maps.InfoWindow({
    content: "Great Shristi"
  });	
  Show();
}
function InitMap() 
{
  	map= new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: latlng,
 	});

  marker= new google.maps.Marker({
  position: latlng,
  map: map,
  title: 'Great Shristi!',
  });

  marker.addListener('click', function() {
  infowindow.open(map, marker);
  });
}

function CodeAddress() 
{
    var address = document.getElementById("address").value;
    geocoder.geocode({'address': address}, function(results, status) {
        if (status == 'OK') 
        {
          map.setZoom(9);
          map.setCenter(results[0].geometry.location);
          marker = new google.maps.Marker({
              map: map,
              position: results[0].geometry.location
          });
        } else
        {
          alert('Geocode was not successful for the following reason: ' + status);
        }
    });
}

 function GeocodeLatLng() 
{
  var input = document.getElementById('latlng').value;
  var latlngStr = input.split(',', 2);
  latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
  geocoder.geocode({'location': latlngi}, function(results, status) {
    if (status === 'OK') 
    {
      if (results[0]) 
      {
        map.setZoom(11);
        map.setCenter(latlngi);
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

/* FOR notification we code here................................................................*/
function Click()
{
  alert("inside CLick");
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() 
  {
      if (this.readyState == 4 && this.status == 200)
      {
        balla=this.responseText;
        decode=JSON.parse(balla);
        alert(decode.length);
        document.getElementById("V1").innerHTML=decode[0].Contact;
     }
  };
    xmlhttp.open("GET", "refresh.php", true);
    xmlhttp.send();
}

function OneShowInMap(value)
{
  DisplayLeft(value);
  var lati = decode[value].Latitude;
  var lngi= decode[value].Longitude;
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

function OneSendMessage(value)
{
  alert("Working.....");
   var Contact=decode[value].Contact;
   value="T"+String(value);
   alert(value);
   var v=document.getElementById(value);
   /*  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() 
    {
      if (this.readyState == 4 && this.status == 200)
      {
        alert("Send Message ko reponse aayo ...");
        alert( " Message has been sent... :D ");*/
      Unsetting(Contact, v);
       
      /* alert( " Unset has been done to "+hide);
      }
    };
    xmlhttp.open("GET", "deliversms.php?contact="+Contact, true);
    xmlhttp.send();   */
}
