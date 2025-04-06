


function enviar() {
    enviar_datos();
}


async function enviar_datos() {
    var peticion = await fetch('controlador.php', {
        method: 'POST',
        body: JSON.stringify({
            nombre: document.getElementById('nombre').value,
            numero: document.getElementById('numero').value
        }),
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'A234',
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    var datos = await peticion.json();
    console.log(datos);
}
