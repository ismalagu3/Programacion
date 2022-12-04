$(function(){
    
    $("#select").on("change", function(e){
        event.preventDefault()
        let select = $("select").val()

        if(select == "ver"){
            $("#ver").addClass("habilitado")
            $("#insertar").addClass("deshabilitado").removeClass("habilitado")
            $("p").on("click",function(e){
                let texto = $(e.currentTarget).text()
                $(e.currentTarget).addClass("deshabilitado")
                $.post("completada.php",{texto:texto})
            })
        }
        else if(select == "insertar"){
            $("#insertar").addClass("habilitado")
            $("#ver").addClass("deshabilitado").removeClass("habilitado")
            $("#boton_agregar").on("click", function(e){
                event.preventDefault()
                let tarea = $("#tarea").val()
                $.post("insertar.php",{tarea:tarea})
                $("#tarea").val("")

                setInterval(redireccion(),2000)
                
                function redireccion(){
                    $(location).attr('href','./principal.php')
                }
            })
        }
        else{
            $("#centro").addClass("deshabilitado")
        }
    })
})

//hay que crear una página de login, registrar las cookies y jugar con eso
//revisar que se envía correctamente el texto al php