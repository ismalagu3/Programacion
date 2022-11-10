$(function(){

function tareas (nombre, persona) {
    tareas.nombre = make;
    this.persona = model;
  }

    $("#boton_select").on("click", function(e){

        event.preventDefault()
        var select = $("select").val()

        console.log(select)

        if(select == "ver"){
            $("#ver").addClass("habilitado")
            $("#insertar").addClass("deshabilitado").removeClass("habilitado")
        }
        else if(select == "insertar"){
            $("#insertar").addClass("habilitado")
            $("#ver").addClass("deshabilitado").removeClass("habilitado")
        }
        else{
            $("#centro").addClass("deshabilitado")
        }
    })

    $("#boton_agregar").on("click", function(e){
        event.preventDefault()
        var tarea = $("#tarea").val()
        console.log(tarea);

    })
})

//hay que crear una página de login, registrar las cookies y jugar con eso