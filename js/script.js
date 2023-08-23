var sidebar = document.getElementById("mySidenav");
var openA = document.getElementById("open");
var closeA = document.getElementById("close");
var oscuro = document.getElementById("oscuro");
var sidebarCont = document.getElementById("sidenavContent");

openA.addEventListener("click", openNav); 
closeA.addEventListener("click", closeNav); 
oscuro.addEventListener("click", closeNav); 

function openNav() {
    sidebar.classList.add("sizeChange", "sizeChangeMobile");
    oscuro.classList.add("opacidad");
    sidebarCont.style.display = "block";
  }
  
function closeNav() {
    sidebar.style.width = "0%";
    sidebar.classList.remove("sizeChange", "sizeChangeMobile");
    oscuro.classList.remove("opacidad");
    sidebarCont.style.display = "none";
  }

  document.addEventListener("DOMContentLoaded", () => {
    const stands = document.querySelectorAll(".standVer, .standHor");
  
    stands.forEach(stand => {
      stand.addEventListener("click", () => {
        // Primero, deselecciona todos los stands
        stands.forEach(otherStand => {
          if (otherStand !== stand) {
            otherStand.classList.remove("seleccionado");
          }
        });
  
        // Luego, agrega la clase "seleccionado" al stand clickeado
        stand.classList.add("seleccionado");
      });
    });
  });