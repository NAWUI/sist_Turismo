const buscador = document.getElementById("buscador");

buscador.addEventListener("input", function(){
    let input = buscador.value;
    $.ajax({
        type: "POST",
        url : "php/buscador.php",
        data : {input : input},
        success: function(response){
            console.log(response);
            var res  = response;
            document.getElementById("tabla").innerHTML = res;
        }
    })
    
})

