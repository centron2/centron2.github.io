function cambiarModo() {
  // Obtén el elemento body
  var body = document.body;

  // Cambia la clase del body para cambiar los estilos
  body.classList.toggle("dark-mode");

  // Cambia el texto del botón según el modo actual
  var boton = document.querySelector("button");
  boton.textContent = body.classList.contains("light-mode")
    ? "Modo Oscuro"
    : "Modo Claro";
}
