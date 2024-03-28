const btnct = document.querySelector(".btncnt");


btnct.addEventListener('click', () =>{
    document.querySelector(".form").style.zIndex = "3";
    document.querySelector(".form").style.display = "flex";
    document.querySelector(".content_header").style.display = "none";
  });