// Esperar a que el documento HTML se cargue completamente
document.addEventListener("DOMContentLoaded", function () {
    // Seleccionar el contenedor de las tarjetas
    const cardsContainer = document.querySelector(".cards");
    
    // Seleccionar el botón "Anterior"
    const prevButton = document.querySelector(".prev-button");
    
    // Seleccionar el botón "Siguiente"
    const nextButton = document.querySelector(".next-button");
    
    // Obtener el ancho de una tarjeta para su posterior uso en el desplazamiento
    const cardWidth = cardsContainer.querySelector(".card").offsetWidth;
    
    // Contar la cantidad de tarjetas dentro del contenedor
    const cardCount = cardsContainer.querySelectorAll(".card").length;

    // Inicializar el índice actual
    let currentIndex = 0;

    // Inicializar una variable para controlar la animación
    let isAnimating = false;

    // Función para navegar entre las tarjetas
    function navigate(direction) {
        // Evitar múltiples clics rápidos durante la animación
        if (isAnimating) return;
        isAnimating = true;

        // Calcular el índice de destino basado en la dirección
        let targetIndex;
        if (direction === "next") {
            targetIndex = currentIndex + 1;
        } else if (direction === "prev") {
            targetIndex = currentIndex - 1;
        }

        // Ajustar el índice para que esté en el rango correcto
        if (targetIndex < 0) {
            targetIndex = cardCount - 1;
        } else if (targetIndex >= cardCount - 3) { //conteo de la penultima tarjeta
            targetIndex = 0;
        }

        // Actualizar el índice actual
        currentIndex = targetIndex;

        // Calcular la posición de desplazamiento en píxeles
        const translateX = -currentIndex * (cardWidth + 15); // Añadir un margen de 15px entre las tarjetas
        
        // Aplicar la animación de desplazamiento
        cardsContainer.style.transition = "transform 0.3s ease-in-out";
        cardsContainer.style.transform = `translateX(${translateX}px)`;

        // Usar un evento de transición para restablecer la animación cuando termine
        cardsContainer.addEventListener("transitionend", () => {
            isAnimating = false;
        });
    }

    // Agregar un evento de clic al botón "Anterior" para navegar hacia atrás
    prevButton.addEventListener("click", () => navigate("prev"));
    
    // Agregar un evento de clic al botón "Siguiente" para navegar hacia adelante
    nextButton.addEventListener("click", () => navigate("next"));

    // Agregar un intervalo para el desplazamiento automático
    let autoScrollInterval = setInterval(() => {
        navigate("next");
    }, 3000); // Cambia la velocidad de desplazamiento según tu preferencia

    // Detener el desplazamiento automático cuando el mouse está sobre las tarjetas
    cardsContainer.addEventListener("mouseenter", () => {
        clearInterval(autoScrollInterval);
    });

    // Reanudar el desplazamiento automático cuando el mouse sale de las tarjetas
    cardsContainer.addEventListener("mouseleave", () => {
        autoScrollInterval = setInterval(() => {
            navigate("next");
        }, 3000);
    });
});



document.addEventListener("DOMContentLoaded", function() {
    // Función para mostrar el footer cuando se llega al final de la página
    function showFooter() {
      var footer = document.querySelector("footer");
      var windowHeight = window.innerHeight;
      var bodyHeight = document.body.clientHeight;
      var scrollPosition = window.scrollY || window.pageYOffset;
  
      if (windowHeight + scrollPosition >= bodyHeight) {
        footer.style.display = "block";
      } else {
        footer.style.display = "none";
      }
    }
  
    // Muestra el footer inicialmente si la página es lo suficientemente corta
    showFooter();
  
    // Escucha el evento de desplazamiento para mostrar el footer cuando sea necesario
    window.addEventListener("scroll", showFooter);
  });
  