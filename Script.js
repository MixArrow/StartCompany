//Evita que el formulario se envie de la manera tradicional
document.getElementById('FormNota').addEventListener('submit', function(event) {
    event.preventDefault();
//Obtener los valores del formulario 
const titulo = document.getElementById('titulo').value;
const contenido = document.getElementById('contenido').value;

//Enviar los datos a 'GestorPHP' con AJAX
fetch('GestorPHP.php' , {
    method : 'POST',
    headers: {
        'Content-type':'application/x-www-form-urlencoded'
    },
    body:`titulo=${encodeURIComponent(titulo)}&contenido=${encodeURIComponent(contenido)}`
})
//leer la respuesta como texto
.then (response => response.text())
.then (data => {
    document.getElementById('mensaje').innerHTML = data;
    document.getElementById('formNota').reset();
})
.catch(error => console.error('Error:', error));
});
// Hacer la actualizacion de la pagina
    return fetch('GestorPHP.php?action=obtenerHistorial')
.then(response => response.text())
.then(historialHTML => {
        document.getElementById('historial').innerHTML = historialHTML;
    })
    .catch(error => console.error('Error al actualizar el historial:',error));
});