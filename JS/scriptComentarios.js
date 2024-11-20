
document.addEventListener('DOMContentLoaded', function () {
    // Selecciona los elementos necesarios
    var btnSubirComentario = document.getElementById('btnSubirComentario');
    var inputAsunto = document.querySelector('.input_asunto');
    var textOpinion = document.querySelector('.text_opinion');
    var comentariosResult = document.querySelector('.comentarios_result');

    // Agrega un evento de clic al botón de comentarios
    btnSubirComentario.addEventListener('click', function () {
        // Obtiene el valor de los campos de entrada
        var asunto = inputAsunto.value;
        var opinion = textOpinion.value;

        // Verifica si ambos campos están llenos
        if (asunto.trim() !== '' && opinion.trim() !== '') {
            // Crea un nuevo elemento de comentario
            var nuevoComentario = document.createElement('div');
            nuevoComentario.classList.add('comentario');
            nuevoComentario.innerHTML = '<strong>' + asunto + ':</strong> ' + opinion;

            // Agrega el nuevo comentario al contenedor de resultados
            comentariosResult.appendChild(nuevoComentario);

            // Limpia los campos de entrada
            inputAsunto.value = '';
            textOpinion.value = '';
        } else {
            // Muestra un mensaje de error si algún campo está vacío
            alert('Por favor, completa todos los campos.');
        }
    });
});

