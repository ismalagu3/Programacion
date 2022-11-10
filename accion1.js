$(function(){

let tarea

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
        }
        else{
            $("#centro").addClass("deshabilitado")
        }
    })

    function agregar_tarea(){
        $("#boton_agregar").on("click", function(e){
            event.preventDefault()
            tarea = $("#tarea").val()
            $("#tarea").val("")
            console.log(tarea)
            tareas(tarea)
        })
    }

    function ver_tarea(){
        $("#ver").html("<p>"+tareas.Tarea+"</p>")
    }

    function tareas (tarea) {
        tareas.Tarea = tarea
      }

})

//hay que crear una página de login, registrar las cookies y jugar con eso