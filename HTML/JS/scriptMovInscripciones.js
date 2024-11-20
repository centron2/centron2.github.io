/*document.addEventListener("DOMContentLoaded", function() {
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
*/

document.addEventListener("DOMContentLoaded", function() {
    var movingText = document.getElementById("movingText");
    var closeButton = document.getElementById("closeButton");

    function getRandomDirection() {
        return Math.random() < 0.5 ? -1 : 1; // Retorna -1 o 1 aleatoriamente
    }

    function moveText() {
        var currentPositionX = parseInt(movingText.style.left) || 0;
        var currentPositionY = parseInt(movingText.style.top) || 0;
        var windowWidth = window.innerWidth;
        var windowHeight = window.innerHeight;
        var textWidth = movingText.clientWidth;
        var textHeight = movingText.clientHeight;

        if (currentPositionX >= windowWidth - textWidth || currentPositionX <= 0) {
            directionX = getRandomDirection();
        }

        if (currentPositionY >= windowHeight - textHeight || currentPositionY <= 0) {
            directionY = getRandomDirection();
        }

        movingText.style.left = currentPositionX + directionX + "px";
        movingText.style.top = currentPositionY + directionY + "px";

        requestAnimationFrame(moveText);
    }

    var directionX = getRandomDirection();
    var directionY = getRandomDirection();

    moveText(); // Inicia el movimiento

    closeButton.addEventListener("click", function() {
        movingText.style.display = "none";
    });
});

