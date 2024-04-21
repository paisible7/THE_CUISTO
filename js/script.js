const btnct = document.querySelector(".btncnt");


btnct.addEventListener('click', () =>{
    document.querySelector(".form").style.zIndex = "3";
    document.querySelector(".form").style.display = "flex";
    document.querySelector(".content_header").style.display = "none";
  });


function modBox(){
  btn_contact = document.querySelector(".contact_link");
  btn_contact.addEventListener('click', ()=>{
    document.querySelector(".modal").style.display = "flex"
    document.querySelector(".modal").style.animation = "modBoxIn .2s linear forwards"
    document.querySelector(".overlay").style.display = "block"
    document.querySelector(".body_overflow").style.overflow = "hidden"
  })
}
modBox();

function condo(){
  overl = document.querySelector(".overlay");
  function condi(){
  
  overl.addEventListener("click", ()=>{
    if (overl.style.display == "block") {
      document.querySelector(".modal").style.animation = "modBoxOut .2s linear forwards"
      overl.style.display = "none"
      document.querySelector(".body_overflow").style.overflow = ""
    }
  })
}
condi();
}
condo();