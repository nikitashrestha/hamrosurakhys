function DisplayLeft(i)
{
    document.getElementById("Photo").innerHTML =i ;
    document.getElementById("Name").innerHTML = i;
    document.getElementById("Address").innerHTML = i;
    document.getElementById("Email").innerHTML = i;
    document.getElementById("PhoneNumber").innerHTML = i;
    document.getElementById("DOB").innerHTML = i;
    document.getElementById("Gender").innerHTML = i;
    document.getElementById("RelativeOne").innerHTML = i;
    document.getElementById("RelativeTwo").innerHTML =i ;
}
function Unset(Contact, haha)
{
      var shristi = new XMLHttpRequest();
      var shristi = new XMLHttpRequest();
      shristi.onreadystatechange = function() 
      {
        if (this.readyState == 4 && this.status == 200)
        {
          alert("Clearing");
          var balla1=this.responseText;  
          haha.style.display="none"; 
        }
      };
      shristi.open("GET", "unset.php?contact="+Contact, true);
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