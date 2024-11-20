// Muestra u oculta el botón de "ir arriba" según el desplazamiento
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    var scrollToTopBtn = document.getElementById("scrollToTopBtn");

    // Muestra el botón si se ha desplazado más de 20px
    if (window.scrollY > 20) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
}

// Función para desplazarse suavemente al inicio
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}
