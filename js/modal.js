document.addEventListener('DOMContentLoaded', function() {
    const overlay = document.getElementById('overlay');
    const modal = document.getElementById('modal');
    const closeButton = document.getElementById('closeButton');

    // Función para mostrar la modal
    function showModal() {
        overlay.style.display = 'flex';
    }

    // Función para cerrar la modal
    function closeModal() {
        overlay.style.display = 'none';
    }

    // Mostrar la modal al cargar la página
    showModal();

    // Cerrar la modal al hacer clic en el botón de cerrar
    closeButton.addEventListener('click', closeModal);

    // Cerrar la modal al hacer clic en el fondo oscurecido
    overlay.addEventListener('click', function(event) {
        if (event.target === overlay) {
            closeModal();
        }
    });
});
