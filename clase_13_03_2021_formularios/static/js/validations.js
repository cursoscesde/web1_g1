function validateContactForm(){
    let email = document.getElementById("email").value;
    let name = document.getElementById("name").value;
    if(email == "" || name == ""){
        alert("Debe llenar todos los campos");
        return false;
    }
    else if(name.length < 5){
        alert("El nombre debe contener más de 5 caracteres");
        return false;
    }
    return true;
}