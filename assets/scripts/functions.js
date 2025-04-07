function refreshForm(nameForm) {
    document.querySelector('form').reset();

    if(nameForm) {
        renderingTemplate(`list_${nameForm}`);
        //renderingTemplate('nameForm', 'formulario-modal');
    }
}