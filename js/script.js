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
    document.querySelector(".overlay").style.display = "block"
    document.querySelector(".body_overflow").style.overflow = "hidden"
  })
}
modBox();

function condi(){
  overl = document.querySelector(".overlay");
  overl.addEventListener("click", ()=>{
    if (overl.style.display == "block") {
      overl.style.display = "none"
      document.querySelector(".modal").style.display = "none"
      document.querySelector(".body_overflow").style.overflow = ""
    }
  })
}
condi();