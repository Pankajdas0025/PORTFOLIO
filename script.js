// animated cursor --------------------------------------------------------
var cursor=document.querySelector(".cursor");

document.addEventListener("mousemove",(e)=>
{
  let x=e.pageX;
  let y=e.pageY;
  cursor.style.top = y+"px";
  cursor.style.left = x+"px";
});// animated cursor end ----------------------------------------------------


function myFunction()
{
  var x = document.getElementById("myTopnav");
  // var y = document.getElementsByClassName("icon").InnerText="&times";
  if (x.className === "topnav") {
    x.className += " responsive";


  } else {
    x.className = "topnav";
  }
}
  function copyLink(relativePath) {
    // window.location.origin + "/MYPHP/CRUD/" +
    const baseURL = relativePath;
    navigator.clipboard.writeText(baseURL).then(() => {
      alert("Copied blog link to clipboard!");
    }).catch(() => {
      alert("Failed to copy!");
    });
  }

 // for my client section slider .....................................................................
  const webpageslider = document.getElementById("slider");
  const totalsliderln = webpageslider.children.length;
  let currentIndexpostn = 0;

  const numberContainerBox = document.getElementById("numberContainerBox");

  // Create numbered buttons
  for (let i = 0; i < totalsliderln; i++) {
    const btn = document.createElement("span");
    btn.classList.add("num-btn");
    btn.textContent = i + 1;
    if (i === 0) btn.classList.add("active");
    btn.setAttribute("data-index", i);
    btn.addEventListener("click", () => {
      currentIndexpostn = i;
      updatewebpageSlider();
    });
    numberContainerBox.appendChild(btn);
  }

  function  updatewebpageSlider() {
    webpageslider.style.transform = `translateX(-${currentIndexpostn * 100}%)`;
    document.querySelectorAll(".num-btn").forEach(btn => btn.classList.remove("active"));
    document.querySelectorAll(".num-btn")[currentIndexpostn].classList.add("active");
  }

  // Auto scroll
  setInterval(() => {
    currentIndexpostn = (currentIndexpostn + 1) % totalsliderln;
    updatewebpageSlider();
  }, 2000);





// to display popup box ................................................................................................
setTimeout(function()
{
document.querySelector("#btn1").style.display = "block";
document.querySelector("#btn2").style.display = "block";
document.querySelector("main").style.opacity = "0.3";
document.querySelector("main").style.pointerEvents ="none";

},4000)

// to remove cancel popup box ................................................................................................
function RemoveIpop()
{
  document.querySelector("#btn1").style.display = "none";
  document.querySelector("#btn2").style.display = "none";
  document.querySelector("main").style.opacity = "1";
  document.querySelector("main").style.pointerEvents ="fill";
}




// scroll to top web..........................
let mybutton = document.getElementById("movebtn");
//When the user scrolls down 1000px from the top of the document, show the button........................
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop >1000 || document.documentElement.scrollTop >1000) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document.................................
 function movetopFunction() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }





  //  Webdevelopmet services formvalidation start...............................................

 const Errorsms = document.getElementById('Error');
    const nameInput = document.getElementById('client_name');
    const emailInput = document.getElementById('client_email');
    const mobInput = document.getElementById('client_mobile');
    const smsInput = document.getElementById('client_sms');


    function Check_Name() {
      const name = nameInput.value.trim();
      if (!/^[a-zA-Z\s]{4,}$/.test(name)) {
        Errorsms.innerHTML = "Please enter a valid name (letters only, min 4 characters).";
        nameInput.style.color = "red";
        setTimeout(() => {
          Errorsms.innerHTML = "";
          nameInput.value = "";
          nameInput.style.color = "black";
        }, 3000);
      } else {
        Errorsms.innerHTML = "";
      }
    }

    function Check_Email() {
      const email = emailInput.value.trim();
      if (!/^\S+@\S+\.\S+$/.test(email)) {
        Errorsms.innerHTML = "Please enter a valid email address.";
        emailInput.style.color = "red";
        setTimeout(() => {
          Errorsms.innerHTML = "";
          emailInput.value = "";
          emailInput.style.color = "black";
        }, 3000);
      } else {
        Errorsms.innerHTML = "";
      }
    }

    function Check_Mob() {
      const mobile = mobInput.value.trim();
      if (!/^\d{10}$/.test(mobile)) {
        Errorsms.innerHTML = "Mobile number must be exactly 10 digits.";
        mobInput.style.color = "red";
        setTimeout(() => {
          Errorsms.innerHTML = "";
          mobInput.value = "";
          mobInput.style.color = "black";
        }, 3000);
      } else {
        Errorsms.innerHTML = "";
      }
    }

    nameInput.addEventListener('focus', () => nameInput.style.color = "black");
    emailInput.addEventListener('focus', () => emailInput.style.color = "black");
    mobInput.addEventListener('focus', () => mobInput.style.color = "black");

    function ShubmitForm(event) {
      event.preventDefault();

      //Check select dropdowns are not on the first (default) option................................
      if (
        nameInput.value.trim() === "" ||
        mobInput.value.trim() === "" ||
        emailInput.value.trim() === "" ||
        smsInput.value.trim() === ""
      ) {
        Errorsms.innerHTML = "⚠️ Please fill all fields correctly before submitting.";
        return false;
      }

      // Show success message
      const Sbtn = document.getElementById("img_form_sbtn");
      Sbtn.style.display = "block";
      Errorsms.innerHTML = "✅ Form submitted successfully!";

      // Optionally reset after 4 seconds
      setTimeout(() => {
        window.location.reload();
      }, 4000);

      return true;

    }

//  Webdevelopmet services formvalidation end here..............................................




