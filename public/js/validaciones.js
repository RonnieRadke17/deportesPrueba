function validar() {
    validacion =true
    var nom,categoria;
    var express = /^[\w.-]+@[\w.-]+\.[a-z]+$/; // Expresión regular para validar el correo electrónico
    const nomApeExp = /^[A-Za-zÀ-ÖØ-öø-ÿ\s']+$/; // Expresión regular para validar nombre y apellido
    
    // Obtiene los valores de los campos del formulario
    nom = document.getElementById("Name").value;
    categoria = document.getElementById("categoria").value;

    // Validación del campo "nombre"
    if (nom === "") {
        alert("Ingresa el nombre");
        return  validacion = false;
    } else if (nom.length > 30) {
        alert("El nombre solo puede tener hasta 30 caracteres");
        return  validacion = false;
    } else if (!nomApeExp.test(nom)) {
        alert("El nombre solo acepta caracteres válidos");
        return  validacion = false;
    }

    //falta validar el valor de categoria
    if(categoria === "null"){
        alert("selecciona una categoria");
        return  validacion = false;
    }


    return validacion

}
