const parametros = new URLSearchParams(window.location.search);
const estado = parametros.get("estadophp");
const actualizado = parametros.get("actualizado");
const eliminado = parametros.get("eliminado");

console.log("Valor de estado:", estado);
console.log("Valor de actualizado:", actualizado);
console.log("Valor de eliminado:", eliminado);

if (estado === "exitoso") {
    alert("¡Éxito, tu mensaje fue guardado!");
} else if (estado === "error") {
    alert("¡Algo salió mal! Inténtalo nuevamente.");
} else if (actualizado === "exito") {
    alert("¡El registro se ha actualizado correctamente!");
} else if (eliminado === "success") {
    alert("¡El registro se ha eliminado correctamente!");
}

if (estado != null || actualizado != null || eliminado != null) {
    window.history.replaceState({}, document.title, window.location.pathname);
}