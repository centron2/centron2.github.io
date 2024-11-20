document.addEventListener("DOMContentLoaded", function() {
    var movingText = document.getElementById("movingText");
    var closeButton = document.getElementById("closeButton");
    var direction = 1; // 1 para moverse a la derecha, -1 para moverse a la izquierda

    function moveText() {
        var currentPosition = parseInt(movingText.style.left) || 0;
        var windowWidth = window.innerWidth;
        var textWidth = movingText.clientWidth;

        if (currentPosition >= windowWidth - textWidth) {
            direction = -1;
        } else if (currentPosition <= 0) {
            direction = 1;
        }

        movingText.style.left = currentPosition + direction + "px";
        requestAnimationFrame(moveText);
    }

    moveText(); // Inicia el movimiento

    closeButton.addEventListener("click", function() {
        movingText.style.display = "none";
    });
});

