

window.onscroll = () =>{
    
    navbar = document.querySelector("#navbar")
   
    if(window.scrollY > 0){
      navbar.style.boxShadow = "0 .5rem .5rem rgba(0, 0, 0, 0.527)"
      navbar.style.transition = ".3s"
    }else{
        navbar.style.boxShadow = "none"
    };
  
};
