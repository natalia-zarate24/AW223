
const parametros = new URLSearchParams(window.location.search);
const estado = parametros.get("estadophp")

if(estado === "exitoso"){
    alert("Exito, tu mensaje fue guardado!")
}else if(estado === "error"){
    alert("Algo salió mal! Inténtalo nuevamente.")
}

if(estado != null){
    window.history.replaceState({},document.title,window.location.pathname); //quita los parametros que vengan con la URL. despliega el mensaje una vez y le dice que borre los parametros por si se vuelve a cargar la url ya no salga el mensaje de nuevo
    
}