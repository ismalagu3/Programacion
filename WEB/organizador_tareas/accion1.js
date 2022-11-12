$(function(){
    $("#select").on("change", function(e){

        event.preventDefault()
        let select = $("select").val()

        if(select == "ver"){
            $("#ver").addClass("habilitado")
            $("#insertar").addClass("deshabilitado").removeClass("habilitado")
            ver_tarea()
        }
        else if(select == "insertar"){
            $("#insertar").addClass("habilitado")
            $("#ver").addClass("deshabilitado").removeClass("habilitado")
            agregar_tarea()
            $("#boton_agregar").on("click", function(e){
                event.preventDefault()
                $("#tarea").val("")
            })
        }
        else{
            $("#centro").addClass("deshabilitado")
        }
    })
})

//hay que crear una página de login, registrar las cookies y jugar con eso
