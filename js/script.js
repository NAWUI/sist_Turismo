var sidebar = document.getElementById("mySidenav");
var openA = document.getElementById("open");
var closeA = document.getElementById("close");
var oscuro = document.getElementById("oscuro");
var sidebarCont = document.getElementById("sidenavContent");
var standBorder = document.getElementsByTagName("standid");
var infoBox = document.getElementById("localidad-dec");

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
    const numMesaElement = document.getElementById("numMesa"); // Selecciona el elemento h3

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

            // Obtén y muestra el id del stand seleccionado en el elemento h3
            const selectedId = stand.id;
            numMesaElement.textContent = `Num de mesa (${selectedId})`; // Actualiza el contenido del h3
            
        });
    });
});
console.log(standBorder);
standBorder.addEventListener("click", () => {
    infoBox.classList.add("border-top-bottom");
    console.log("AAA");
})


