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
    console.log("hola")
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

        /*$(document).ready(function(){
          $('#descripcion').load('php/localidades_mapa.php'); 
          
          
      });*/

      

          var standText1=stand.textContent.replace(/[\n\r]+|[\s]{2,}/g, ' ').trim();
          if(standText1!=""){
            const desc1 = document.getElementById("admin");
            const computedStyle = window.getComputedStyle(desc1);
          
            if (computedStyle.display == "none") {
              desc1.style.display = "block";
            } else {
              desc1.style.display = "none";
            }
          }else{
          const desc = document.getElementById("descripcion");
          const computedStyle = window.getComputedStyle(desc);
          
            if (computedStyle.display == "none") {
              desc.style.display = "block";
            } else {
              desc.style.display = "none";
            }
          }


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
          })

    

      
      })
    });
    })
    
        
    

  

 /* var enviar=document.getElementById("stand1");
  enviar.addEventListener("click",function cargarContenido(){

  /*$("stand1").click(function(){
    cargarContenido("cargar_localidades.php");
  });

  //function cargarContenido() {
    alert("hola");
    document.getElementById("descripcion").load("carga_contenido.php");
    $("#Descripcion").load("../carga_localidades.php");
 // }
});
*/


  