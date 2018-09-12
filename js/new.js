var decode1;
function DisplayLeft(i)
{
  
  var getuserinfo = new XMLHttpRequest();
    getuserinfo.onreadystatechange = function()
    {
      if(this.readyState == 4 && this.status == 200)
      {
       
        var userInfo=this.responseText;
        decode1=JSON.parse(userInfo);
        if(i!=null)
        {
           
          document.getElementById("Name1").innerHTML ="Username:";
          document.getElementById("PhoneNumber1").innerHTML = "UserContact:";
          document.getElementById("Address1").innerHTML = "Address:";
          document.getElementById("Email1").innerHTML = "Email:";
          document.getElementById("DOB1").innerHTML = "Date of Birth:";
          document.getElementById("Gender1").innerHTML = "Gender:";
          document.getElementById("RelativeOne1").innerHTML = "Trusted Contact1:";
          document.getElementById("RelativeTwo1").innerHTML = "Trusted Contacts2:";
          
          document.getElementById("Name").innerHTML = decode1[0].Username;
          document.getElementById("Address").innerHTML = decode1[0].Address;
          document.getElementById("Email").innerHTML = decode1[0].Email;
          document.getElementById("PhoneNumber").innerHTML = decode1[0].ContactNumber;
          document.getElementById("DOB").innerHTML = decode1[0].DOB;
          document.getElementById("Gender").innerHTML = decode1[0].Gender;
          document.getElementById("RelativeOne").innerHTML = decode1[0].RelativeOne;
          document.getElementById("RelativeTwo").innerHTML = decode1[0].RelativeTwo;
          document.getElementById('ima').src= decode1[0].Photo;
          
          
       
        }
        else{
          document.getElementById("Name1").innerHTML ="";
          document.getElementById("PhoneNumber1").innerHTML = "";
          document.getElementById("Address1").innerHTML = "";
          document.getElementById("Email1").innerHTML = "";
          document.getElementById("DOB1").innerHTML = "";
          document.getElementById("Gender1").innerHTML = "";
          document.getElementById("RelativeOne1").innerHTML = "";
          document.getElementById("RelativeTwo1").innerHTML = "";
          
          document.getElementById("Name").innerHTML = "";
          document.getElementById("Address").innerHTML = "";
          document.getElementById("Email").innerHTML = "";
          document.getElementById("PhoneNumber").innerHTML = "";
          document.getElementById("DOB").innerHTML = "";
          document.getElementById("Gender").innerHTML = "";
          document.getElementById("RelativeOne").innerHTML = "";
          document.getElementById("RelativeTwo").innerHTML = "";
          document.getElementById('ima').src= "#";
        }
       
        
      }
    };

    getuserinfo.open("GET","userinfo.php?ContactNumber="+i,true);
    getuserinfo.send();
  
}

function Unset(Contact, haha)
{
    
    var shristi = new XMLHttpRequest();
      shristi.onreadystatechange = function() 
      {
        if (this.readyState == 4 && this.status == 200)
        {
          alert(haha);
          var balla1=this.responseText;  
          haha.innerHTML=""; 
          document.getElementById("Name1").innerHTML ="";
          document.getElementById("PhoneNumber1").innerHTML = "";
          document.getElementById("Address1").innerHTML = "";
          document.getElementById("Email1").innerHTML = "";
          document.getElementById("DOB1").innerHTML = "";
          document.getElementById("Gender1").innerHTML = "";
          document.getElementById("RelativeOne1").innerHTML = "";
          document.getElementById("RelativeTwo1").innerHTML = "";
          
          document.getElementById("Name").innerHTML = "";
          document.getElementById("Address").innerHTML = "";
          document.getElementById("Email").innerHTML = "";
          document.getElementById("PhoneNumber").innerHTML = "";
          document.getElementById("DOB").innerHTML = "";
          document.getElementById("Gender").innerHTML = "";
          document.getElementById("RelativeOne").innerHTML = "";
          document.getElementById("RelativeTwo").innerHTML = "";
          document.getElementById('ima').src= "";
          
        }
      };
      shristi.open("GET", "unset.php?ContactNumber="+Contact, true);
      shristi.send();    
}


function Show()
 {
    var word="Hamro Surakshya,Lalitpur Branch";
    var length=word.length;
    var i=0;
    var temp="";
    var show=setInterval(function(){
      if(length>i)
      {
        temp=(temp+word.substring(i, (i+1)));
        document.getElementById("slide").innerHTML=temp;
        i=i+1;
      }
      else
      {
        temp="";
        document.getElementById("slide").innerHTML= "";
        i=0;
      }
    }, 277);
 }






