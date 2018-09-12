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
  title: 'Your location',
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
  //include'notification.php';
  alert("inside CLick");
  
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() 
  {
    if (this.readyState == 4 && this.status == 200)
    {
      balla=this.responseText;
      decode=JSON.parse(balla);
      alert(decode.length);
      V1.innerHTML=decode[0].Send_Num;
      V2.innerHTML=decode[1].Send_Num;
      V3.innerHTML=decode[2].Send_Num;
      V4.innerHTML=decode[3].Send_Num;
      V5.innerHTML=decode[4].Send_Num;
      V6.innerHTML=decode[5].Send_Num;
      V7.innerHTML=decode[6].Send_Num;
    }
  };
  xmlhttp.open("GET", "refresh.php", true);
  xmlhttp.send();
  return true;
}



function OneShowInMap()
{

  alert('hello');
 DisplayLeft(decode[0].Send_Num);
  var lati = decode[0].latitude;
  var lngi= decode[0].longitude;
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

function TwoShowInMap()
{
  alert('hello');
   DisplayLeft(decode[1].Send_Num);
  var lati = decode[1].latitude;
  var lngi= decode[1].longitude;
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

function ThreeShowInMap()
{
  alert('helo');
   DisplayLeft(decode[2].Send_Num);
  var lati = decode[2].latitude;
  var lngi= decode[2].longitude;
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

function FourShowInMap()
{
 
 alert('helo');
 DisplayLeft(decode[3].Send_Num);
  var lati = decode[3].latitude;
  var lngi= decode[3].longitude;
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

function FiveShowInMap()
{
  alert('helo');
  DisplayLeft(decode[4].Send_Num);
  var lati = decode[4].latitude;
  var lngi= decode[4].longitude;
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

function SixShowInMap()
{
  alert('helo');
   DisplayLeft(decode[5].Send_Num);
  
  var lati = decode[5].latitude;
  var lngi= decode[5].longitude;
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

function SevenShowInMap()
{
  DisplayLeft(decode[6].Send_Num);
  var lati = decode[6].latitude;
  var lngi= decode[6].longitude;
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
    alert("Working.....");
    var Contact=decode[0].Send_Num;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() 
    {
      if (this.readyState == 4 && this.status == 200)
      {
        alert("Send Message ko reponse aayo ...");
        alert( " Message has been sent... :D ");
        Unset(Contact, document.getElementById("One"));
      }
    };
    xmlhttp.open("GET", "deliversms.php?contact="+Contact, true);
    xmlhttp.send();   
}

function TwoSendMessage()
{
    alert("Working.....");
    var Contact=decode[1].Send_Num;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() 
    {
      if (this.readyState == 4 && this.status == 200)
      {
        alert("Send Message ko reponse aayo ...");
        alert( " Message has been sent... :D ");
        Unset(Contact, document.getElementById("Two"));
      }
    };
    xmlhttp.open("GET", "deliversms.php?contact="+Contact, true);
    xmlhttp.send();   
}

function ThreeSendMessage()
{
    alert("Working.....");
    var Contact=decode[2].Send_Num;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() 
    {
      if (this.readyState == 4 && this.status == 200)
      {
        alert("Send Message ko reponse aayo ...");
        alert( " Message has been sent... :D ");
        Unset(Contact, document.getElementById("Three"));
      }
    };
    xmlhttp.open("GET", "deliversms.php?contact="+Contact, true);
    xmlhttp.send();   
}

function FourSendMessage()
{
    alert("Working.....");
    var Contact=decode[3].Send_Num;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() 
    {
      if (this.readyState == 4 && this.status == 200)
      {
        alert("Send Message ko reponse aayo ...");
        alert( " Message has been sent... :D ");
        Unset(Contact, document.getElementById("Four"));
      }
    };
    xmlhttp.open("GET", "deliversms.php?contact="+Contact, true);
    xmlhttp.send();   
}

function FiveSendMessage()
{
    alert("Working.....");
    var Contact=decode[4].Send_Num;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() 
    {
      if (this.readyState == 4 && this.status == 200)
      {
        alert("Send Message ko reponse aayo ...");
        alert( " Message has been sent... :D ");
        Unset(Contact, document.getElementById("Five"));
      }
    };
    xmlhttp.open("GET", "deliversms.php?contact="+Contact, true);
    xmlhttp.send();   
}

function SixSendMessage()
{
    alert("Working.....");
    var Contact=decode[5].Send_Num;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() 
    {
      if (this.readyState == 4 && this.status == 200)
      {
        alert("Send Message ko reponse aayo ...");
        alert( " Message has been sent... :D ");
        Unset(Contact, document.getElementById("Six"));
      }
    };
    xmlhttp.open("GET", "deliversms.php?contact="+Contact, true);
    xmlhttp.send();   
}

function SevenSendMessage()
{
    alert("Working.....");
    var Contact=decode[6].Send_Num;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() 
    {
      if (this.readyState == 4 && this.status == 200)
      {
        alert("Send Message ko reponse aayo ...");
        alert( " Message has been sent... :D ");
        Unset(Contact, document.getElementById("Seven"));
      }
    };
    xmlhttp.open("GET", "deliversms.php?contact="+Contact, true);
    xmlhttp.send();   
}








