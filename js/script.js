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

        var standText1=stand.textContent.replace(/[\n\r]+|[\s]{2,}/g, ' ').trim();
      
            const desc1 = document.getElementById("admin");
            const computedStyle = window.getComputedStyle(desc1);
          
            if (computedStyle.display == "none") {
              desc1.style.display = "block";
            } else {
              desc1.style.display = "none";
            }
          
      /* fin control de muestra de divs*/


    /* Asignacion de stands */
    var enviar=document.getElementById("enviar");
      console.log(enviar);
        enviar.addEventListener("click", () => {
          
          

            var texto=document.getElementById("select");
            var selectedL=texto.options[texto.selectedIndex].text;
            var standText=stand.textContent.replace(/[\n\r]+|[\s]{2,}/g, ' ').trim();
            var standId=stand.id;

            var formData = {
            'standId': standId,
            'standText': standText,
            'selectedL' : selectedL
            }
        $.ajax({
            type: 'POST',
            url: 'php/asignar_localidades.php', // Replace with your PHP file's URL
            data: formData,
            success: function(response) {
                console.log('AJAX request successful:', response);
                // You can do something with the response here
            },
            error: function(xhr, status, error) {
                console.log('AJAX Error:', error);
            }
            });
            var texto=document.getElementById("select");
          var selectedL=texto.options[texto.selectedIndex].text;
          var standText=stand.textContent.replace(/[\n\r]+|[\s]{2,}/g, ' ').trim();
          var standId=stand.id;
          var formData1 = {
            'standId': standId,
            'standText': standText,
            'selectedL' : selectedL
            }
          $.ajax({
            type: 'POST',
            url: 'mostrar_integrantes.php', // Replace with your PHP file's URL
            data: formData1,
            success: function (response) {
                    
              $('#integrante1').html(response);
              console.log("hola");
          },
            error: function(xhr, status, error) {
                console.log('AJAX Error:', error);
            }
            });
          })
          })
          
     /* Fin asignacion de stands */
    

      
      })
    });