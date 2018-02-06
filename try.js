  var OneContact=decode[0].Contact;
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() 
  {
    if (this.readyState == 4 && this.status == 200)
    {
      balla=this.responseText;
      alert(balla);
      var xmlhttpunset = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() 
      {
        if (this.readyState == 4 && this.status == 200)
        {
          var balla1=this.responseText;  
          V1.innerHTML=JSON.parse(balla1); 

        }
      };
      xmlhttpunset.open("GET", "unset.php?contact="+OneContact, true);
      xmlhttpunset.send(); 

    }
  };
  xmlhttp.open("GET", "deliversms.php?contact="+OneContact, true);
  xmlhttp.send();