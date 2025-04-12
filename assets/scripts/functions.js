function refreshForm(nameForm) {
    document.querySelector('form').reset();

    if (nameForm) {
        renderingTemplate(`list_${nameForm}`);
        //renderingTemplate('nameForm', 'formulario-modal');
    }
}

/**
 *Elimina un registro dinamicamente
 *
 * @param {*} id id del registro
 * @param {*} nameForm nombre del fomrmulario
 */
function deleteRegistro(id, nameForm) {

    let url = `../server/api/${nameForm}/delete_${nameForm}.service.php?id=${id}`;
    fetch(url, {
        method: 'DELETE'
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    title: data.message,
                    icon: 'success'
                });
                refreshForm(nameForm);
            } else {
                Swal.fire({
                    title: data.message,
                    icon: 'error'
                });
            }
        })
        .catch(error => {

            console.error('Error:', error);
            Swal.fire({
                title: error,
                icon: 'error'
            })
        });
}