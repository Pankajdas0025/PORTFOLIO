

function Scrollbtn(){

 window.scrollTo(0, -1000);
      

}


  function formCheck(){
    a=document.getElementById("uname").value;
    b=document.getElementById("uemail").value;
    c=document.getElementById("umsg").value;
    var Objtext={
      Name :a,
      Email:b,
      message:c,
    }
    var Strtext=JSON.stringify(Objtext);
    if(a!=" "&&b!=" "&&c!=" ")
    {
      localStorage.setItem(b,Strtext);
      alert("Your message sucessfully sent");
    }
    else alert("All field is requi#A3CCE3 !");

  }

function openNav() {
  document.getElementById("result").style.display="block";
}

function closeNav() {
  document.getElementById("result").style.display="none";
}
  