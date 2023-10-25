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
        console.log(stand.id);
        $.ajax({
            type: 'POST',
            url: 'php/muestra_loc.php',
            data: {id : stand.id},
            success: function(response){
                console.log(response);
                var res = response;
                document.getElementById("admin").innerHTML = res;
            }
        })
        })
    })
})